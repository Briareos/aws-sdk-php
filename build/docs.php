<?php
use Aws\Build\Docs\DocsBuilder;

// Setup autoloading for SDK and build classes.
$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->addPsr4('Aws\\Build\\Docs\\', __DIR__ . '/docs/classes');

// Setup directories.
$sourceDir = __DIR__ . '/artifacts/staging';
$apiModelsDir = realpath(__DIR__ . '/../src/Common/Resources/api');
$outputDir = __DIR__ . '/artifacts/docs';
$themeDir = $outputDir . '/theme';

foreach ([$outputDir, $themeDir, $themeDir . '/layout', $themeDir . '/img'] as $dir) {
    if (!is_dir($dir)) {
        if (!mkdir($dir, 0755)) {
            fwrite(STDERR, "Could not create directory: {$dir}.");
            exit();
        }
    }
}

// Generate API docs
$builder = new DocsBuilder($apiModelsDir, $outputDir);
return $builder->getSami($sourceDir);

/**
 * TODO:
 * ------
 * - Ordering/tweaking search.
 * - Visual tweaks to API pages.
 * - Get theme updates into official Sami phar.
 */
