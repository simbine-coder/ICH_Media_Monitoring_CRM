<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Reports de demonstração (Looker Studio).
     * Usa updateOrCreate: pode ser corrido várias vezes sem duplicar reports.
     */
    public function run(): void
    {
        $reports = [
            [
                'title' => 'ICOMOS Mention Detection',
                'description' => 'TOPICS - Institutional; World Heritage Advisory & Role; Heritage at risk and threatened sites',
                'embed_url' => 'https://lookerstudio.google.com/embed/reporting/e44bc1a4-85f6-4218-a00c-517489e302b0/page/ACDEG',
            ],
            [
                'title' => 'ICH Mention Detection',
                'description' => 'TOPICS - Intangible heritage: Inscriptions and Safeguarding; Restitution, repatriation and illicit trafficking; Community, Indigenous and Participatory Heritage',
                'embed_url' => 'https://lookerstudio.google.com/embed/reporting/226b1629-428a-45db-b06f-522c1024f200/page/ACDEG',
            ],
        ];

        foreach ($reports as $data) {
            Report::updateOrCreate(
                ['title' => $data['title']],
                $data + ['is_active' => true]
            );
        }
    }
}
