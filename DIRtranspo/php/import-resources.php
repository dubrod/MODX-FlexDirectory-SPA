<?php

class Resources_Section {
    function res_import($post, $xmlFileName) {
        if(isset($_POST['ressubmit'])) {
            include_once("lib/config.php");

            $xml = processXML($xmlFileName);

            $pageData = array();
            $pageDataErrors = array();
            $postsData = array();
            $postsDataErrors = array();

            //post variables
            if(empty($_POST["tplPublish"])){$tplPublish = false; } else { $tplPublish = $_POST["tplPublish"]; }

            //get posts
            foreach ($xml->channel->item as $post) {

                //if its not a post, break
                $type = $post->children('wp',true)->post_type;

                $wp = $post->children('wp',true);
                $id = $post->children('wp',true)->post_id;
                $pt = $mysqli->real_escape_string(parseContent((string)$post->title));
                $it = $mysqli->real_escape_string(parseContent((string)$post->children('excerpt',true)->encoded));
                $raw_content =  $mysqli->real_escape_string(parseContent((string)$post->children('content',true)->encoded));
                //print_r($raw_content); //debug your conent
                $content = '<p>' . str_replace('\n\n', "</p><p>", $raw_content) . "</p>"; // make paragraphs, including one at the end;
                //print_r($content);//debug your conent
                //exit();//debug your conent
                $alias = $mysqli->real_escape_string(parseContent((string)$post->children('wp',true)->post_name));
                $menuIndex = $post->children('wp',true)->menu_order;
                $template = "";
                $publish = "0";
                $pub_date =  strtotime((string)$post->pubDate); if (empty($pub_date)) {$pub_date = strtotime((string)$wp->post_date);}

                //set categories
                $catetv = "";
                $cateName = "";
                $cateId = "";
                //loop through <category domain="category" >Laptop</category>
                foreach( $post->category as $c){
                    if($c["domain"] == "category"){
                        //tv name
                        $catetv = $c["nicename"];
                        //category Name
                        $cateName = parseContent((string)$c);
                    }
                    //check for tv in database
                    $tv_query = "SELECT * FROM modx_site_tmplvars";
                    if ($tv_result = $mysqli->query($tv_query)) {
                        while ($row = $tv_result->fetch_array()) {
                            //if name matches set it
                            if($row["name"] == $catetv){
                                $cateId = $row["id"];
                            }
                        }
                    }
                }

                //set thumbnail
                $thumbnailtv = "";
                $thumbnail = "";
                $tvId = "";
                //loop through <image domain="thumbnail" nicename="thumbnailtv">...jpg</category>
                foreach( $post->image as $img){
                    if($img["domain"] == "thumbnail"){
                        //tv name
                        $thumbnailtv = $img["nicename"];
                        //file name
                        $thumbnail = parseContent((string)$img);
                    }
                    //check for tv in database
                    $tv_query = "SELECT * FROM modx_site_tmplvars";
                    if ($tv_result = $mysqli->query($tv_query)) {
                        while ($row = $tv_result->fetch_array()) {
                            //if name matches set it
                            if($row["name"] == $thumbnailtv){
                                $tvId = $row["id"];
                            }
                        }
                    }
                }

                //if Respect Publish setting
                if($tplPublish){
                    //if its set to publish
                    if ($post->children('wp',true)->status == "publish") {
                        $publish = "1";
                    } else {
                        $publish = "0";
                    }
                }

                /*loop through Item postmeta values
                foreach ($post->children('wp',true)->postmeta as $wpm) {

                    //if template matching set
                    if($tplMatch){
                        //if its a template Meta Item
                        //<wp:meta_key>_wp_page_template</wp:meta_key>
                        if ($wpm->meta_key == "_wp_page_template") {
                            //<wp:meta_value><![CDATA[default]]></wp:meta_value>
                            $wp_temp = parseContent((string)$wpm->meta_value);

                            //check for automatic match
                            $tpl_query = "SELECT * FROM modx_site_templates";
                            if ($tpl_result = $mysqli->query($tpl_query)) {
                                while ($row = $tpl_result->fetch_array()) {
                                    //if name matches set it
                                    if($row["templatename"] == $wp_temp){
                                        $template = $row["id"];
                                    }
                                }
                            }
                        }
                    }


                } //eof PostMeta Loop

                //if template was not set above
                if(empty($template)){$template = $_POST["tplDefault"];}
                */

                //Start Post Type Custom options

                if($type == "post"){

                    $parent = $post->children('wp',true)->post_parent;

                    //Insert to DB
                    $insert = "INSERT INTO `modx_site_content` (`id`,`pagetitle`,`introtext`,`content`,`parent`,`template`,`alias`,`menuindex`,`publishedon`,`published`) VALUES ('".$id."','".$pt."','".$it."','".$content."','".$parent."','3','".$alias."','".$menuIndex."','".$pub_date."','".$publish."')";
                    $result = $mysqli->query($insert);
                    if ( $result ) {
                        $postsData[] = $pt;
                        //we are inside matching ID success so we can add Category now
                        $cateInsert = "INSERT INTO `modx_site_tmplvar_contentvalues` (`tmplvarid`,`contentid`,`value`) VALUES ('".$cateId."','".$id."','".$cateName."')";
                        $cresult = $mysqli->query($cateInsert);
                        //we are inside matching ID success so we can add TV - Thumbnail now if we have one
                        if($thumbnail){
                            $tvInsert = "INSERT INTO `modx_site_tmplvar_contentvalues` (`tmplvarid`,`contentid`,`value`) VALUES ('".$tvId."','".$id."','".$thumbnail."')";
                            $tvresult = $mysqli->query($tvInsert);
                        }
                    } else {
                        //try again with no ID, it might have been taken by preset
                        $reinsert = "INSERT INTO `modx_site_content` (`pagetitle`,`introtext`,`content`,`parent`,`template`,`alias`,`menuindex,`publishedon`,`published`) VALUES ('".$pt."','".$it."','".$content."','".$parent."','3','".$alias."','".$menuIndex."','".$pub_date."','".$publish."')";
                        $result_two = $mysqli->query($reinsert);
                        $postsDataErrors[] = $pt;
                    }
                }


                //get pages
                //if its not a page, break

                if($type == "page"){

                    $parent = $post->children('wp',true)->post_parent;

                    //Insert to DB
                    $insert = " INSERT INTO `modx_site_content` (`id`,`pagetitle`,`introtext`,`content`,`parent`,`template`,`alias`,`menuindex`,`publishedon`,`published`) VALUES ('".$id."','".$pt."','".$it."','".$content."','".$parent."','2','".$alias."','".$menuIndex."','".$pub_date."','".$publish."')";
                    $result = $mysqli->query($insert);
                    if( $result ) {
                        $pageData[] = $pt;
                    } else {
                        //try again with no ID, it might have been taken by preset
                        $reinsert = "INSERT INTO `modx_site_content` (`pagetitle`,`introtext`,`content`,`parent`,`template`,`alias`,`menuindex`,`publishedon`,`published`) VALUES ('".$pt."','".$it."','".$content."','".$parent."','2','".$alias."','".$menuIndex."','".$pub_date."','".$publish."')";
                        $result_two = $mysqli->query($reinsert);
                        $pageDataErrors[] = $pt;
                        if(!$result_two){printf("%s\n", $mysqli->error);}
                    }
                }

            } //for each item


            return '<p><strong>Imported With No Errors:</strong> Posts: '.count($postsData).' | Pages: '.count($pageData).'</p><p><strong>Errors:</strong> Posts: '.count($postsDataErrors).' | Pages: '.count($pageDataErrors).'</p>';

        }
    }
}
