<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
class GenerateSitemap extends Command
{
    protected $signature = 'generate:sitemap';
    protected $description = 'Генерация sitemap.xml для поисковых систем';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    public function handle()
    {
        $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/online-training'))
        ->add(Url::create('/callback'))
        ->add(Url::create('/hair-stylist'))
        ->add(Url::create('/manicure'))
        ->add(Url::create('/lamination'))
        ->add(Url::create('/onlinemanicure'));

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap успешно создан: public/sitemap.xml');
    }
}
