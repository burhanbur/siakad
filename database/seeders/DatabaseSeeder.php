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
                MasterEducationProgramsTableSeeder::class,
                MasterInstitutionsTableSeeder::class,
                MasterSubjectsTableSeeder::class,
                MasterAcademicPeriodsTableSeeder::class,
                MasterAcademicEventsTableSeeder::class,
                MasterConversionScoresTableSeeder::class,
                RolesTableSeeder::class,
                UsersTableSeeder::class,
                MasterLecturesTableSeeder::class,
                MasterStudentsTableSeeder::class,
            ]);

            DB::commit();
        } catch (Exception $ex) {
            DB::rollback();
        }
    }
}
