<?php

use App\Models\Certificate;
use App\Models\SkipLevel;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = User::create([
            'name' => 'Super admin',
            'email' => 'admin@gmail.com',
            'password' => '123123',
        ]);

        $super_admin->assignRole(['super-admin']);
        $super_admin->save();

        $certificate = Certificate::create([
            'certificate_code' => 'IGCSE',
            'certificate_name' => 'International General Certificate of Secondary Education',
        ]);
        $certificate = Certificate::create([
            'certificate_code' => 'UKISET',
            'certificate_name' => 'UKISET',
        ]);
        $certificate = Certificate::create([
            'certificate_code' => 'IELTS',
            'certificate_name' => 'International English Language Testing System',
        ]);
        $certificate = Certificate::create([
            'certificate_code' => 'IAL',
            'certificate_name' => 'International Advanced Level',
        ]);

        $setting = Setting::create([
            'key' => 'token_exchange_rate',
            'value' => '2',
        ]);
        $setting = Setting::create([
            'key' => 'phone_footer',
            'value' => '+852 2602 1668',
        ]);
        $setting = Setting::create([
            'key' => 'whatapp_footer',
            'value' => '+852 2602 1668',
        ]);
        $setting = Setting::create([
            'key' => 'mail_admin_footer',
            'value' => 'adminssions@helios-edu.com',
        ]);
        $setting = Setting::create([
            'key' => 'address_ho_footer',
            'value' => 'Helios Education (Head Office) Room 902, 9th Floor, Yongsheng Centre, 9 Star Street, Causeway Bay',
        ]);
        $setting = Setting::create([
            'key' => 'address_cbs_footer',
            'value' => 'Helios Education (Causeway Bay Store) To Make An Appointment Room 2202, Causeway Bay Plaza 1, 489 Hennessy Road, Causeway Bay',
        ]);
        // buy level
        $skipLevel = SkipLevel::create([
            'name' => 'level_50',
            'tokens' => '100',
        ]);
        $skipLevel = SkipLevel::create([
            'name' => 'level_55',
            'tokens' => '200',
        ]);
        $skipLevel = SkipLevel::create([
            'name' => 'level_60',
            'tokens' => '300',
        ]);
    }
}
