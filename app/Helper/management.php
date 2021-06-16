<?php
/*
 *  All helper functions for management part
 */
use Illuminate\Support\Facades\Session;

//get user profile picture
function user_profile_image(): string
{
    if (auth()->check()){
        if (!empty(auth()->user()->image)){
            return asset(\Illuminate\Support\Facades\Storage::url(auth()->user()->image));
        }
        return asset('assets/media/default/admin-user.svg');
    }
    return asset('assets/media/default/admin-user.svg');
}
function get_user_profile_image($user): string
{
    if (!empty($user->image)){
        return asset(\Illuminate\Support\Facades\Storage::url($user->image));
    }
    return asset('assets/media/default/admin-user.svg');

}
//make alert message for admin panel
function alert_message($message='انجام شد',$level='info'){
    Session::flash('alert_message_message',$message);
    Session::flash('alert_message_level',$level);
}

//get url method badge
function url_method_badge($method = null): string
{
    switch ($method){
        case 'get':
            return "<span class='badge badge-success p2'>GET</span>";
            break;
        case 'post':
            return "<span class='badge badge-warning p2'>POST</span>";
            break;
        case 'put':
            return "<span class='badge badge-primary p2'>PUT</span>";
            break;
        case 'path':
            return "<span class='badge badge-secondary p2'>PATH</span>";
            break;
        case 'delete':
            return "<span class='badge badge-danger p2'>DELETE</span>";
            break;
        default:
            return "<span class='badge badge-dark p2'>unknown</span>";
            break;
    }

}

function url_method_badge_color($method = null): string
{
    switch ($method){
        case 'get':
            return "bg-success";
            break;
        case 'post':
            return "bg-warning ";
            break;
        case 'put':
            return "bg-primary";
            break;
        case 'path':
            return "bg-secondary";
            break;
        case 'delete':
            return "bg-danger";
            break;
        default:
            return "bg-dark";
            break;
    }

}

function url_method_badge_bg_color($method = null): string
{
    switch ($method){
        case 'get':
            return "bg-light-success";
            break;
        case 'post':
            return "bg-light-warning ";
            break;
        case 'put':
            return "bg-light-primary";
            break;
        case 'path':
            return "bg-light-secondary";
            break;
        case 'delete':
            return "bg-light-danger";
            break;
        default:
            return "bg-light-dark";
            break;
    }

}

function param_type_bg_color($type = null): string
{
    switch ($type){
        case 'string':
            return "badge-success";
            break;
        case 'int':
            return "badge-danger ";
            break;
        case 'bool':
            return "badge-info";
            break;
        case 'array':
            return "badge-primary";
            break;
        case 'file':
            return "badge-secondary";
            break;
        case 'timestamp':
            return "badge-warning";
            break;
        default:
            return "badge-dark";
            break;
    }

}

//get url with id
function get_url_with_id($id){
    return \App\Models\Url::find($id);
}
