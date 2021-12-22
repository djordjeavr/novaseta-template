<?php
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Image',
        'menu_title' => 'Home Image',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_page(array(
        'page_title' => 'Data',
        'menu_title' => 'Site Data',
        'menu_slug' => 'theme-general-images',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_page(array(
        'page_title' => 'Öffnungszeiten',
        'menu_title' => 'Öffnungszeiten',
        'menu_slug' => 'mall-opening-time',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}
    include 'wp_bootstrap_navwalker.php';


    function register_my_menus()
    {
        register_nav_menus(
            array(
                'primary' => __('Main menu'),
            )
        );
    }

    add_action('init', 'register_my_menus');
add_filter('acf/load_field/name=schedule_start_date', function ($field) {
    $date= date('Ymd Gia') ;
    $field['default_value'] =$date;
    return $field;
});
add_filter('acf/load_field/name=schedule_end_date', function ($field) {
    $currentTime=time();
    $currentTime+=2592000;
    $date= date('Ymd Gi',$currentTime) ;
    $field['default_value'] =$date;
    return $field;
});

add_action('remove_old_special_times','remove_old_special_times');
function remove_old_special_times(){

    $times = get_field('special_time','option');
    $current_time = date('Ymd');
    foreach($times as $index => $time){
        if($time["date"] < $current_time){
            unset($times[$index]);
        }
    }
    update_field('special_time', $times, 'option');

}

add_filter('acf/load_value/name=special_time', 'my_acf_load_value', 10, 3); //repeater name is timeline
function my_acf_load_value( $rows)
{
    foreach( $rows as $key => $row ) {
        $column_id[ $key ] = $row['field_5967e7639a09b'];

    }

    array_multisort( $column_id, SORT_DESC, $rows );
    return $rows;
}
function get_current_opening_time(){
    $mallRegularTime=get_field('regular_time','option');
    $mallSpecialTime=get_field('special_time','option');
    $day = date_i18n('l', strtotime(date('Ymd'))) ;
    $day=strtolower($day);
    $currentDate=date('Ymd');
    foreach($mallSpecialTime as $SpecialDate){
        if($SpecialDate['date']==$currentDate){

            if(!empty($SpecialDate['closed']) || $SpecialDate['opening_time']==""|| $SpecialDate['closing_time']==""){
                return "Geschlossen";
            }
            else{
                return $SpecialDate['opening_time']." - ".$SpecialDate['closing_time'];
            }
        }
    }
    if(!empty($mallRegularTime[$day]['closed']) || $mallRegularTime[$day]['opening_time']==""|| $mallRegularTime[$day]['closing_time']==""){
        return "Geschlossen";
    }
    else{
        return $mallRegularTime[$day]['opening_time']." - ".$mallRegularTime[$day]['closing_time'];
    }
}

function delete_empty_fields() {
    $specialTimes=get_field_object('special_time', 'option');
    $position=0;
    foreach($specialTimes['value'] as $i=>$specialTime){
        $position++;
        if(strtotime($specialTime['date'])+86400<time()){
            delete_row('special_time', $position, 'option');
            $position--;
        }
    }

    /************SET SPECIAL OPENING TIME AS CLOSED IF TIME IS NOT SPECIFIED************/
    $specialTimes=get_field_object('special_time', 'option');
    foreach($specialTimes['value'] as $i=>$specialTime){
        $specialTimes['value'][$i]['date']=$specialTime['date'];
        if($specialTime['opening_time']=="" && $specialTime['closing_time']==""){
            $specialTimes['value'][$i]['closed']=['Geschlossen'];
        }
        $specialTimes['value'][$i]['opening_time']=$specialTime['opening_time'];
        $specialTimes['value'][$i]['closing_time']=$specialTime['closing_time'];
        $specialTimes['value'][$i]['description']=$specialTime['description'];
    }
    update_field($specialTimes['key'], $specialTimes['value'], 'options');

    /************SET REGULAR OPENING TIME AS CLOSED IF TIME IS NOT SPECIFIED************/
    $field=get_field_object('regular_time','options');
    foreach($field['value'] as $i=>$day){
        if($day['opening_time']=="" || $day['closing_time']==""){
            $field['value'][$i]['closed']=['Geschlossen'];
        }
    }
    update_field($field['key'], $field['value'], 'options');
}

add_action('acf/save_post', 'delete_empty_fields');
add_action('check_opening_time','delete_empty_fields');
