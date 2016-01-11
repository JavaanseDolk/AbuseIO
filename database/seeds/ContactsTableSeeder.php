<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('contacts')->delete();

        $contacts = [
            [
                'id'            => 1,
                'reference'     => 'INTERNET',
                'name'          => 'Global internet',
                'email'         => 'internet@local.lan',
                'api_host'      => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ],
            [
                'id'            => 2,
                'reference'     => 'CERT',
                'name'          => 'A country CERT',
                'email'         => 'cert@local.lan',
                'api_host'      => 'https://abuseio-api.cert.local.lan',
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ],
            [
                'id'            => 3,
                'reference'     => 'ISP',
                'name'          => 'Internet Service Provider',
                'email'         => '',
                'api_host'      => 'https://abuseio-api.isp.local.lan',
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ],
            [
                'id'            => 11,
                'reference'     => 'CUST1',
                'name'          => 'Customer 1',
                'email'         => 'cust1@local.lan',
                'api_host'      => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ],
            [
                'id'            => 12,
                'reference'     => 'CUST2',
                'name'          => 'Customer 2',
                'email'         => 'cust2@local.lan',
                'api_host'      => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ],
            [
                'id'            => 13,
                'reference'     => 'CUST3',
                'name'          => 'Customer 3',
                'email'         => 'cust3@local.lan',
                'api_host'      => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ],
            [
                'id'            => 14,
                'reference'     => 'CUST4',
                'name'          => 'Customer 4',
                'email'         => 'cust4@local.lan',
                'api_host'      => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ],
            [
                'id'            => 15,
                'reference'     => 'CUST5',
                'name'          => 'Customer 5',
                'email'         => 'cust5@local.lan',
                'api_host'      => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ],
            [
                'id'            => 16,
                'reference'     => 'CUST6',
                'name'          => 'Customer 6',
                'email'         => 'cust6@local.lan',
                'api_host'      => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ],
            [
                'id'            => 17,
                'reference'     => 'CUST7',
                'name'          => 'Customer 7',
                'email'         => 'cust7@local.lan',
                'api_host'      => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ],
            [
                'id'            => 18,
                'reference'     => 'CUST8',
                'name'          => 'Customer 8',
                'email'         => 'cust8@local.lan',
                'api_host'      => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ],
            [
                'id'            => 19,
                'reference'     => 'CUST9',
                'name'          => 'Customer 9',
                'email'         => 'cust9@local.lan',
                'api_host'      => null,
                'enabled'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'account_id'    => 1,
            ]
        ];

        DB::table('contacts')->insert($contacts);
    }
}
