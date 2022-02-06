<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute は承認されました。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute は、 :date の次の日である必要があります。',
    'after_or_equal' => ':attribute は、 :date から次の日以降である必要があります。',
    'alpha' => ':attribute には文字のみを入れることができます。',
    'alpha_dash' => ':attribute には、文字、数字、スラッシュのみを入れることができます。',
    'alpha_num' => ':attribute には、文字、数字のみを入れることができます。',
    'array' => ':attribute は配列である必要があります。',
    'before' => ':attribute は :date より以前の日付である必要があります。',
    'before_or_equal' => ':attribute は、 :date より以前の日付または今日である必要があります。',
    'between' => [
        'numeric' => ':attribute は、 :min と :max の間の長さでなければいけません。',
        'file' => ':attribute は、最低:minキロバイト、最高:maxキロバイトでなければいけません',
        'string' => ':attribute は、:minと:maxまでの文字列でなければなりません。',
        'array' => ':attribute は、:minと:maxに含まれる要素でなければいけません。',
    ],
    'boolean' => ':attribute は、TrueまたはFalseである必要があります。',
    'confirmed' => ':attribute の確認が一致しません。',
    'date' => ':attribute の日付は有効ではありません',
    'date_format' => ':attribute が形式:format と一致しません。',
    'different' => ':attribute と :other は、違う値でないといけません。',
    'digits' => ':attribute は、:digits に含まれる物でなければなりません。',
    'digits_between' => ':attribute は、:minと:maxの間の数字でなければなりません。',
    'dimensions' => ':attribute は、無効な画像形式です。',
    'distinct' => ':attribute に重複した値があります。',
    'email' => ':attribute は、有効なメールアドレスである必要があります。',
    'exists' => '選択された :attribute が無効です。',
    'file' => ':attribute は、ファイルである必要があります。',
    'filled' => ':attribute は、入力されている必要があります。',
    'image' => ':attribute は、画像である必要があります。',
    'in' => '選択した :attribute は、有効ではありません',
    'in_array' => ':attribute フィールドは、:otherに存在しません。',
    'integer' => ':attribute は、整数である必要がります。',
    'ip' => ':attribute のIPは有効である必要があります。',
    'json' => ':attribute は、有効なJSONの列である必要があります。',
    'max' => [
        'numeric' => ':attribute は、:maxより大きくないといけません。',
        'file' => ':attribute は、:maxキロバイトより大きくなければいけません。',
        'string' => ':attribute は、:max文字より大きくなければなりません。',
        'array' => ':attribute は、:max以上の項目を持つことはできません。',
    ],
    'mimes' => ':attribute は、タイプ:valueのファイルである必要があります。',
    'mimetypes' => ':attribute は、タイプ:valueのファイルである必要があります。',
    'min' => [
        'numeric' => ':attribute は、最低でも:minでなければなりません。',
        'file' => ':attribute は、最低でも:minキロバイトでなければいけません。',
        'string' => ':attribute は、最低でも;min文字以上でなければなりません。',
        'array' => ':attribute には、最低でも:minの項目が必要です。',
    ],
    'not_in' => '選択された:attributeが無効です。',
    'numeric' => ':attributeは数字である必要があります。',
    'present' => ':attributeフィールドが必要です。',
    'regex' => ':attributeフォーマットは無効です。',
    'required' => ':attributeフィールドは必要です。',
    'required_if' => ':otherが:valueの場合、:attributeフィールドは必須です。',
    'required_unless' => ':attributeフィールドは、:valuesに:otherが含まれていない限り必須です',
    'required_with' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_with_all' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_without' => ':valueが存在しない場合、:attributeフィールドは必須です。',
    'required_without_all' => ':attributeフィールドは、:valuesのいずれもが存在しない場合に必要である。',
    'same' => ':attributeと:otherは一致させる必要があります。',
    'size' => [
        'numeric' => :attributeは必ず:sizeとする。',
        'file' => ':attributeは、:sizeキロバイトでなければならない。',
        'string' => ':attributeは、:size 文字でなければならない。',
        'array' => ':attributeには、:sizeの項目が必要です。',
    ],
    'string' => ':attributeは文字列でなければならない。',
    'timezone' => ':attributeは有効なゾーンでなければならない。',
    'unique' => ':attributeはすでに取得されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeの形式が無効です。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':env 変数',
        'invalid_password' => '入力されたパスワードは、このアカウントでは無効です。',
    ],
];
