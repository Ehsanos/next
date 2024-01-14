<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $permissions = json_decode('[{"id":"1","name":"view_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"2","name":"view_any_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"3","name":"create_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"4","name":"update_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"5","name":"restore_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"6","name":"restore_any_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"7","name":"replicate_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"8","name":"reorder_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"9","name":"delete_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"10","name":"delete_any_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"11","name":"force_delete_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"12","name":"force_delete_any_catalog","guard_name":"web","created_at":"2023-03-12 07:49:43","updated_at":"2023-03-12 07:49:43"},
{"id":"13","name":"view_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"14","name":"view_any_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"15","name":"create_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"16","name":"update_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"17","name":"restore_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"18","name":"restore_any_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"19","name":"replicate_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"20","name":"reorder_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"21","name":"delete_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"22","name":"delete_any_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"23","name":"force_delete_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"24","name":"force_delete_any_category","guard_name":"web","created_at":"2023-03-12 07:49:45","updated_at":"2023-03-12 07:49:45"},
{"id":"25","name":"view_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"26","name":"view_any_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"27","name":"create_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"28","name":"update_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"29","name":"restore_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"30","name":"restore_any_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"31","name":"replicate_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"32","name":"reorder_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"33","name":"delete_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"34","name":"delete_any_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"35","name":"force_delete_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"36","name":"force_delete_any_city","guard_name":"web","created_at":"2023-03-12 07:49:46","updated_at":"2023-03-12 07:49:46"},
{"id":"37","name":"view_country","guard_name":"web","created_at":"2023-03-12 07:49:47","updated_at":"2023-03-12 07:49:47"},
{"id":"38","name":"view_any_country","guard_name":"web","created_at":"2023-03-12 07:49:47","updated_at":"2023-03-12 07:49:47"},
{"id":"39","name":"create_country","guard_name":"web","created_at":"2023-03-12 07:49:47","updated_at":"2023-03-12 07:49:47"},
{"id":"40","name":"update_country","guard_name":"web","created_at":"2023-03-12 07:49:47","updated_at":"2023-03-12 07:49:47"},
{"id":"41","name":"restore_country","guard_name":"web","created_at":"2023-03-12 07:49:47","updated_at":"2023-03-12 07:49:47"},
{"id":"42","name":"restore_any_country","guard_name":"web","created_at":"2023-03-12 07:49:47","updated_at":"2023-03-12 07:49:47"},
{"id":"43","name":"replicate_country","guard_name":"web","created_at":"2023-03-12 07:49:47","updated_at":"2023-03-12 07:49:47"},
{"id":"44","name":"reorder_country","guard_name":"web","created_at":"2023-03-12 07:49:47","updated_at":"2023-03-12 07:49:47"},
{"id":"45","name":"delete_country","guard_name":"web","created_at":"2023-03-12 07:49:47","updated_at":"2023-03-12 07:49:47"},
{"id":"46","name":"delete_any_country","guard_name":"web","created_at":"2023-03-12 07:49:48","updated_at":"2023-03-12 07:49:48"},
{"id":"47","name":"force_delete_country","guard_name":"web","created_at":"2023-03-12 07:49:48","updated_at":"2023-03-12 07:49:48"},
{"id":"48","name":"force_delete_any_country","guard_name":"web","created_at":"2023-03-12 07:49:48","updated_at":"2023-03-12 07:49:48"},
{"id":"49","name":"view_department","guard_name":"web","created_at":"2023-03-12 07:49:48","updated_at":"2023-03-12 07:49:48"},
{"id":"50","name":"view_any_department","guard_name":"web","created_at":"2023-03-12 07:49:49","updated_at":"2023-03-12 07:49:49"},
{"id":"51","name":"create_department","guard_name":"web","created_at":"2023-03-12 07:49:49","updated_at":"2023-03-12 07:49:49"},
{"id":"52","name":"update_department","guard_name":"web","created_at":"2023-03-12 07:49:49","updated_at":"2023-03-12 07:49:49"},
{"id":"53","name":"restore_department","guard_name":"web","created_at":"2023-03-12 07:49:49","updated_at":"2023-03-12 07:49:49"},
{"id":"54","name":"restore_any_department","guard_name":"web","created_at":"2023-03-12 07:49:49","updated_at":"2023-03-12 07:49:49"},
{"id":"55","name":"replicate_department","guard_name":"web","created_at":"2023-03-12 07:49:49","updated_at":"2023-03-12 07:49:49"},
{"id":"56","name":"reorder_department","guard_name":"web","created_at":"2023-03-12 07:49:49","updated_at":"2023-03-12 07:49:49"},
{"id":"57","name":"delete_department","guard_name":"web","created_at":"2023-03-12 07:49:49","updated_at":"2023-03-12 07:49:49"},
{"id":"58","name":"delete_any_department","guard_name":"web","created_at":"2023-03-12 07:49:49","updated_at":"2023-03-12 07:49:49"},
{"id":"59","name":"force_delete_department","guard_name":"web","created_at":"2023-03-12 07:49:49","updated_at":"2023-03-12 07:49:49"},
{"id":"60","name":"force_delete_any_department","guard_name":"web","created_at":"2023-03-12 07:49:49","updated_at":"2023-03-12 07:49:49"},
{"id":"61","name":"view_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"62","name":"view_any_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"63","name":"create_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"64","name":"update_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"65","name":"restore_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"66","name":"restore_any_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"67","name":"replicate_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"68","name":"reorder_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"69","name":"delete_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"70","name":"delete_any_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"71","name":"force_delete_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"72","name":"force_delete_any_lang","guard_name":"web","created_at":"2023-03-12 07:49:50","updated_at":"2023-03-12 07:49:50"},
{"id":"73","name":"view_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"74","name":"view_any_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"75","name":"create_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"76","name":"update_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"77","name":"restore_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"78","name":"restore_any_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"79","name":"replicate_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"80","name":"reorder_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"81","name":"delete_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"82","name":"delete_any_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"83","name":"force_delete_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"84","name":"force_delete_any_post","guard_name":"web","created_at":"2023-03-12 07:49:51","updated_at":"2023-03-12 07:49:51"},
{"id":"85","name":"view_product","guard_name":"web","created_at":"2023-03-12 07:49:52","updated_at":"2023-03-12 07:49:52"},
{"id":"86","name":"view_any_product","guard_name":"web","created_at":"2023-03-12 07:49:52","updated_at":"2023-03-12 07:49:52"},
{"id":"87","name":"create_product","guard_name":"web","created_at":"2023-03-12 07:49:52","updated_at":"2023-03-12 07:49:52"},
{"id":"88","name":"update_product","guard_name":"web","created_at":"2023-03-12 07:49:52","updated_at":"2023-03-12 07:49:52"},
{"id":"89","name":"restore_product","guard_name":"web","created_at":"2023-03-12 07:49:52","updated_at":"2023-03-12 07:49:52"},
{"id":"90","name":"restore_any_product","guard_name":"web","created_at":"2023-03-12 07:49:52","updated_at":"2023-03-12 07:49:52"},
{"id":"91","name":"replicate_product","guard_name":"web","created_at":"2023-03-12 07:49:52","updated_at":"2023-03-12 07:49:52"},
{"id":"92","name":"reorder_product","guard_name":"web","created_at":"2023-03-12 07:49:52","updated_at":"2023-03-12 07:49:52"},
{"id":"93","name":"delete_product","guard_name":"web","created_at":"2023-03-12 07:49:53","updated_at":"2023-03-12 07:49:53"},
{"id":"94","name":"delete_any_product","guard_name":"web","created_at":"2023-03-12 07:49:53","updated_at":"2023-03-12 07:49:53"},
{"id":"95","name":"force_delete_product","guard_name":"web","created_at":"2023-03-12 07:49:53","updated_at":"2023-03-12 07:49:53"},
{"id":"96","name":"force_delete_any_product","guard_name":"web","created_at":"2023-03-12 07:49:53","updated_at":"2023-03-12 07:49:53"},
{"id":"97","name":"view_role","guard_name":"web","created_at":"2023-03-12 07:49:53","updated_at":"2023-03-12 07:49:53"},
{"id":"98","name":"view_any_role","guard_name":"web","created_at":"2023-03-12 07:49:54","updated_at":"2023-03-12 07:49:54"},
{"id":"99","name":"create_role","guard_name":"web","created_at":"2023-03-12 07:49:54","updated_at":"2023-03-12 07:49:54"},
{"id":"100","name":"update_role","guard_name":"web","created_at":"2023-03-12 07:49:54","updated_at":"2023-03-12 07:49:54"},
{"id":"101","name":"delete_role","guard_name":"web","created_at":"2023-03-12 07:49:54","updated_at":"2023-03-12 07:49:54"},
{"id":"102","name":"delete_any_role","guard_name":"web","created_at":"2023-03-12 07:49:54","updated_at":"2023-03-12 07:49:54"},
{"id":"103","name":"view_section","guard_name":"web","created_at":"2023-03-12 07:49:54","updated_at":"2023-03-12 07:49:54"},
{"id":"104","name":"view_any_section","guard_name":"web","created_at":"2023-03-12 07:49:54","updated_at":"2023-03-12 07:49:54"},
{"id":"105","name":"create_section","guard_name":"web","created_at":"2023-03-12 07:49:54","updated_at":"2023-03-12 07:49:54"},
{"id":"106","name":"update_section","guard_name":"web","created_at":"2023-03-12 07:49:55","updated_at":"2023-03-12 07:49:55"},
{"id":"107","name":"restore_section","guard_name":"web","created_at":"2023-03-12 07:49:55","updated_at":"2023-03-12 07:49:55"},
{"id":"108","name":"restore_any_section","guard_name":"web","created_at":"2023-03-12 07:49:55","updated_at":"2023-03-12 07:49:55"},
{"id":"109","name":"replicate_section","guard_name":"web","created_at":"2023-03-12 07:49:55","updated_at":"2023-03-12 07:49:55"},
{"id":"110","name":"reorder_section","guard_name":"web","created_at":"2023-03-12 07:49:55","updated_at":"2023-03-12 07:49:55"},
{"id":"111","name":"delete_section","guard_name":"web","created_at":"2023-03-12 07:49:55","updated_at":"2023-03-12 07:49:55"},
{"id":"112","name":"delete_any_section","guard_name":"web","created_at":"2023-03-12 07:49:55","updated_at":"2023-03-12 07:49:55"},
{"id":"113","name":"force_delete_section","guard_name":"web","created_at":"2023-03-12 07:49:55","updated_at":"2023-03-12 07:49:55"},
{"id":"114","name":"force_delete_any_section","guard_name":"web","created_at":"2023-03-12 07:49:55","updated_at":"2023-03-12 07:49:55"},
{"id":"115","name":"view_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"116","name":"view_any_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"117","name":"create_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"118","name":"update_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"119","name":"restore_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"120","name":"restore_any_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"121","name":"replicate_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"122","name":"reorder_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"123","name":"delete_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"124","name":"delete_any_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"125","name":"force_delete_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"126","name":"force_delete_any_tag","guard_name":"web","created_at":"2023-03-12 07:49:56","updated_at":"2023-03-12 07:49:56"},
{"id":"127","name":"view_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"},
{"id":"128","name":"view_any_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"},
{"id":"129","name":"create_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"},
{"id":"130","name":"update_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"},
{"id":"131","name":"restore_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"},
{"id":"132","name":"restore_any_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"},
{"id":"133","name":"replicate_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"},
{"id":"134","name":"reorder_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"},
{"id":"135","name":"delete_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"},
{"id":"136","name":"delete_any_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"},
{"id":"137","name":"force_delete_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"},
{"id":"138","name":"force_delete_any_user","guard_name":"web","created_at":"2023-03-12 07:49:57","updated_at":"2023-03-12 07:49:57"}
]');


        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission->name,
                'guard_name' => 'web',

            ]);
        }

    }

}




