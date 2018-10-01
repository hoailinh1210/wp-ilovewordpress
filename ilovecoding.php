<?php
/*
Plugin Name: I Love Coding
*/

add_filter ('manage_media_columns', 'add_media_columns_custom_column');

function add_media_columns_custom_column($posts_column){
    $posts_column['customColumn'] = 'Custom Column';
    return $posts_column;
}

function column_id_row($columnName, $columnID){
    if($columnName == 'customColumn'){
        echo '
        <input type="checkbox" name="vehicle1" value=', $columnID ,'> Is it protected<br>
        <a href="#" onclick="alert(\'Hello world\');">Configure private urls</a>
        <style>
            #post-',$columnID,':hover{
               background-color: violet;
            }
        </style>
        ';
    }
}
add_filter( 'manage_media_custom_column', 'column_id_row', 10, 2 );

//add_action('manage_media_columns', add_media_custom_columns_custom_column,10,2);
//
//function add_media_custom_columns_custom_column($posts_columns, $detached){
//    if ('customColumn' !== $$posts_columns){
//        return ;
//    }
//}