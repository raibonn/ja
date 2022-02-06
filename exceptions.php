<?php

return [
    'daemon_connection_failed' => 'デーモンとの通信時に問題が発生し、その結果 HTTP/:code が返されました。この問題はログに記録されています。',
    'node' => [
        'servers_attached' => 'ノードが削除するには、そのノードにリンクしているサーバーがないことが必要です。',
        'daemon_off_config_updated' => 'デーモンの設定<strong>アップデートされました。</strong>, しかし、Daemonの設定ファイルを自動的に更新しようとした際にエラーが発生しました。これらの変更を適用するには、デーモンの設定ファイル(config.yml)を手動で更新する必要があります。',
    ],
    'allocations' => [
        'server_using' => '現在、この割り当てにサーバーが割り当てられています。割り当てを削除できるのは、現在割り当てられているサーバーがない場合のみです。',
        'too_many_ports' => '1つの範囲に1000以上のポートを一度に追加することはサポートされていません。',
        'invalid_mapping' => 'portに指定されたマッピングは無効なため、処理できませんでした。',
        'cidr_out_of_range' => 'CIDR表記では、/25から/32までのマスクしか使用できません。',
        'port_out_of_range' => '割り当てるポートは、1024以上65535以下である必要があります。',
    ],
    'nest' => [
        'delete_has_servers' => 'アクティブなサーバーが接続されているネストはパネルから削除できません。',
        'egg' => [
            'delete_has_servers' => 'アクティブなサーバーが接続されているEggはパネルから削除できません。',
            'invalid_copy_id' => 'スクリプトのコピー元として選択されたEggが存在しないか、スクリプトそのものをコピーしています。',
            'must_be_child' => 'このEggの"Copy Settings From"ディレクティブは、選択したネストの子オプションである必要があります。',
            'has_children' => 'このEggは、1つまたは複数の他のEggの親です。このEggを削除する前に、それらのEggを削除してください。',
        ],
        'variables' => [
            'env_not_unique' => '環境変数 :name は、このEggに固有のものでなければなりません。',
            'reserved_name' => '環境変数 :name は保護されており、変数に代入することはできません。',
            'bad_validation_rule' => '検証ルール ":rule "はこのアプリケーションでは有効なルールではありません。',
        ],
        'importer' => [
            'json_error' => 'JSONファイルを解析しようとしたときにエラーが発生しました: :error.',
            'file_error' => '提供されたJSONファイルは有効ではありません。',
            'invalid_json_provided' => '提供されたJSONファイルは、認識できる形式ではありません。',
        ],
    ],
    'subusers' => [
        'editing_self' => '自分のサブユーザーアカウントの編集は禁止されています。',
        'user_is_owner' => 'このサーバーのサブユーザーとして、サーバー所有者を追加することはできません。',
        'subuser_exists' => 'そのメールアドレスを持つユーザーは、すでにこのサーバーのサブユーザーとして割り当てられています。',
    ],
    'databases' => [
        'delete_has_databases' => 'アクティブなデータベースがリンクされているデータベースホストサーバーを削除することはできません。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '連鎖したタスクのインターバル時間は最大15分です。',
    ],
    'locations' => [
        'has_nodes' => 'アクティブなノードが接続されているロケーションを削除できません。',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">Node #:node</a> の鍵の失効に失敗しました。. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => '自動配置に指定された要件を満たすノードが見つかりませんでした。',
        'no_viable_allocations' => '自動展開の条件を満たす割り当ては見つかりませんでした。',
    ],
    'api' => [
        'resource_not_found' => '要求されたリソースはこのサーバーに存在しません。',
    ],
];
