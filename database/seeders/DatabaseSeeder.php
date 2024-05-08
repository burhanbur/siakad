<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $this->call([
                RefReligionsTableSeeder::class,
                RefPresenceStatusTableSeeder::class,
                RefSessionTypesTableSeeder::class,
                RefSchoolTypesTableSeeder::class,
                RefSubjectRegistrationStatusTableSeeder::class,
                RefFundingTypesTableSeeder::class,
                RefInstitutionTypesTableSeeder::class,
                RefGradeComponentsTableSeeder::class,
                RefFunctionalRolesTableSeeder::class,
                RefExamTypesTableSeeder::class,
                RefDaysTableSeeder::class,
                RefApprovalStatusTableSeeder::class,
                RefAdministrativeStatusTableSeeder::class,
                RefExitStatusTableSeeder::class,
                RefAcademicEventsTableSeeder::class,
                MasterEducationProgram::class,
                MasterInstitutionsTableSeeder::class,
                RolesTableSeeder::class,
                UsersTableSeeder::class,
            ]);

            DB::commit();
        } catch (Exception $ex) {
            DB::rollback();
        }
    }
}
