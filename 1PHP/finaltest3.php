<?php

$area = array(
       "USA",
       "japan" => array(
            "osaka",
            "tokyo" => array(
                "渋谷区",
                "港区" => array(
                    "青山2",
                    "青山1"=> array(

                        "Rakuten",
                        "Oracle", 
                    ),
                ),
            ),
        ),
    );
    // echo '<pre>';
    // var_dump($area);


       

echo $area['japan']['tokyo']['港区']['青山1'][0];
echo '<br>';
echo $area['japan']['tokyo']['港区']['青山1'][1];
// 

