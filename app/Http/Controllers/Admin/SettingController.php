<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Models\FarmPhone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FarmAddress;

class SettingController extends Controller
{
    public function index()
    {

        // $settings = ["website_name_en" => "Dream Farms", "website_name_ar" => "مززارع ديم", "default_locale" => "en", "email" => "dreamfarms.com", "currency" => "egp", "logo_url" => "/images/settings/logo.png", "motto_en" => "The Leader of all Milk\nSafe and Healthy Milk Since 1975", "motto_ar" => "رواد صناعه الابان", "info_en" => "Continually productize compelling quality dome packed with all \n Elated Themes ently utilize website and creating pages corporate", "info_ar" => "ننتج منتجات ذات جودة عالية وبتصميم جذاب باستمرار، ونقوم بتعبئتها في أغلفة عالية الجودة،\n وذلك لاستخدامها بكل سهولة في المواقع الإلكترونية وإنشاء صفحات الشركات",  "working_days_en" => "Mon - Fri 09:00 - 18:00 \n(except public holidays)", "working_days_ar" => "الاثنين - الجمعة 09:00 - 18:00 \n(ما عدا الأعياد الرسمية)", "map_location" => "", "contact_head_en" => "Continually productize compelling quality dome packed with all Elated Themes ently utilize website and creating pages corporate", "contact_head_ar" => "ننتج منتجات ذات جودة عالية وبتصميم جذاب باستمرار، ونقوم بتعبئتها في أغلفة عالية الجودة،\n وذلك لاستخدامها بكل سهولة في المواقع الإلكترونية وإنشاء صفحات الشركات", "copyright_info" => "© 2021 Gowala.All Rights Reserved By LabArtisan", "social_facebook" => "https://www.facebook.com/dreamfarms", "social_twitter" => "https://twitter.com/dreamfarms", "social_instagram" => "https://www.instagram.com/dreamfarms"];
        // \App\Models\Setting::create($settings);
        // \App\Models\FarmPhone::create([
        //     'number' => '01069162203',

        // ]);
        // \App\Models\FarmPhone::create([
        //     'number' => '012345698',

        // ]);
        // \App\Models\FarmAddress::create([
        //     'address_en' => 'shirbeen',
        //     'address_ar' => 'شربين',

        // ]);
        // \App\Models\FarmAddress::create([
        //     'address_en' => 'mansoura',
        //     'address_ar' => 'المنصوره',

        // ]);
        $setting = Setting::first();
        return view(
            'admin.pages.settings.general',
            [
                'setting' => $setting
            ]
        );
    }
}
