<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $types = [
          [
            'id' => Str::uuid()->toString(),
            'group' => 'contract_type',
            'key' => 'adhesion',
            'value' => 'Adhesion Contracts',
          ],
          [
            'id' => Str::uuid()->toString(),
            'group' => 'contract_type',
            'key' => 'aleatory',
            'value' => 'Aleatory Contracts',
          ],
          [
            'id' => Str::uuid()->toString(),
            'group' => 'contract_type',
            'key' => 'bilateral-unilateral',
            'value' => 'Bilateral and Unilateral Contracts',
          ],
          [
            'id' => Str::uuid()->toString(),
            'group' => 'contract_type',
            'key' => 'under-Seal',
            'value' => 'Contracts under Seal',
          ],
          [
            'id' => Str::uuid()->toString(),
            'group' => 'contract_type',
            'key' => 'executed-executory',
            'value' => 'Executed and Executory Contracts',
          ],
          [
            'id' => Str::uuid()->toString(),
            'group' => 'contract_type',
            'key' => 'express',
            'value' => 'Express Contracts',
          ],
          [
            'id' => Str::uuid()->toString(),
            'group' => 'contract_type',
            'key' => 'implied',
            'value' => 'Implied Contracts',
          ],
          [
            'id' => Str::uuid()->toString(),
            'group' => 'contract_type',
            'key' => 'unconscionable',
            'value' => 'Unconscionable Contracts',
          ],
          [
            'id' => Str::uuid()->toString(),
            'group' => 'contract_type',
            'key' => 'void-voidable',
            'value' => 'Void and Voidable Contracts',
          ],
        ];
        DB::table('sysparams')->insert($types);
    }
}