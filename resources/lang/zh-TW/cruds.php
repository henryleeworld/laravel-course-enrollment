<?php

return [
    'userManagement' => [
        'title'          => '使用者管理',
        'title_singular' => '使用者管理',
    ],
    'permission'     => [
        'title'          => '權限',
        'title_singular' => '權限',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'title'             => '標題',
            'title_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'title'              => '標題',
            'title_helper'       => '',
            'permissions'        => '權限',
            'permissions_helper' => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => '使用者',
        'title_singular' => '使用者',
        'fields'         => [
            'id'                       => '編號',
            'id_helper'                => '',
            'name'                     => '名稱',
            'name_helper'              => '',
            'email'                    => '電子郵件',
            'email_helper'             => '',
            'email_verified_at'        => '電子郵件驗證時間',
            'email_verified_at_helper' => '',
            'password'                 => '密碼',
            'password_helper'          => '',
            'roles'                    => '角色',
            'roles_helper'             => '',
            'remember_token'           => '記住令牌',
            'remember_token_helper'    => '',
            'created_at'               => '建立時間',
            'created_at_helper'        => '',
            'updated_at'               => '更新時間',
            'updated_at_helper'        => '',
            'deleted_at'               => '刪除時間',
            'deleted_at_helper'        => '',
        ],
    ],
    'discipline'     => [
        'title'          => '學科',
        'title_singular' => '學科',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'institution'    => [
        'title'          => '學院',
        'title_singular' => '學院',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'name'               => '名稱',
            'name_helper'        => '',
            'description'        => '描述',
            'description_helper' => '',
            'logo'               => '標章',
            'logo_helper'        => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
    'course'         => [
        'title'          => '課程',
        'title_singular' => '課程',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'name'               => '名稱',
            'name_helper'        => '',
            'description'        => '描述',
            'description_helper' => '',
            'photo'              => '照片',
            'photo_helper'       => '',
            'institution'        => '學院',
            'institution_helper' => '',
            'price'              => '價格',
            'price_helper'       => '',
            'disciplines'        => '學科',
            'disciplines_helper' => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
    'enrollment'     => [
        'title'          => '選課',
        'title_singular' => '選課',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'user'              => '使用者',
            'user_helper'       => '',
            'course'            => '課程',
            'course_helper'     => '',
            'status'            => '狀況',
            'status_helper'     => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
];
