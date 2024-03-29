<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'akaunting/akaunting';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'akaunting/laravel-firewall' => '1.3.1@3c60543441f898b23326b50c70db2164df69f019',
  'akaunting/laravel-language' => '1.0.18@19fc3e12ce8e5c052eda5ca6ecd3ae2b0f9952d3',
  'akaunting/laravel-menu' => '1.0.13@ec84125ddfa34f4c3c6872f56111554b19894838',
  'akaunting/laravel-module' => '2.0.9@266891471a9370d8b8679f5887082b7c4d6a5916',
  'akaunting/laravel-money' => '1.2.2@a60cd786ac85e290ff1fa62b104ae04df2dcbd30',
  'akaunting/laravel-setting' => '1.2.7@10186327e3b93fca56eaa9e4d8ee2ead189f0332',
  'akaunting/laravel-version' => '1.0.4@5d632c8ce54131bbe15f22ea135934efbf1fad85',
  'akaunting/module-bc21' => '2.0.0@4158c23c70aea22e6fb774a7a0d1d9e3d856fe8d',
  'akaunting/module-offline-payments' => '2.0.2@ad4dfc9f0cb19c695f7ace724e088262be889016',
  'akaunting/module-paypal-standard' => '2.0.1@49671f6f3c2c6319c7b319716292d31c2ad7db51',
  'asm89/stack-cors' => 'v2.0.3@9cb795bf30988e8c96dd3c40623c48a877bc6714',
  'aws/aws-sdk-php' => '3.183.9@3b3aafdceac4cb820e2ae65a8785e4d07db471a7',
  'balping/json-raw-encoder' => 'v1.0.1@e2b0ab888342b0716f1f0628e2fa13b345c5f276',
  'barryvdh/laravel-debugbar' => 'v3.5.7@88fd9cfa144b06b2549e9d487fdaec68265e791e',
  'barryvdh/laravel-dompdf' => 'v0.9.0@5b99e1f94157d74e450f4c97e8444fcaffa2144b',
  'barryvdh/laravel-ide-helper' => 'v2.10.0@73b1012b927633a1b4cd623c2e6b1678e6faef08',
  'barryvdh/reflection-docblock' => 'v2.0.6@6b69015d83d3daf9004a71a89f26e27d27ef6a16',
  'bkwld/cloner' => '3.9.2@825ad2cb237660bdef4d4aad3c539efb9a7db0a8',
  'brick/math' => '0.9.2@dff976c2f3487d42c1db75a3b180e2b9f0e72ce0',
  'clue/stream-filter' => 'v1.5.0@aeb7d8ea49c7963d3b581378955dbf5bc49aa320',
  'composer/ca-bundle' => '1.2.9@78a0e288fdcebf92aa2318a8d3656168da6ac1a5',
  'composer/composer' => '2.0.14@92b2ccbef65292ba9f2004271ef47c7231e2eed5',
  'composer/metadata-minifier' => '1.0.0@c549d23829536f0d0e984aaabbf02af91f443207',
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'composer/semver' => '3.2.5@31f3ea725711245195f62e54ffa402d8ef2fdba9',
  'composer/spdx-licenses' => '1.5.5@de30328a7af8680efdc03e396aad24befd513200',
  'composer/xdebug-handler' => '2.0.1@964adcdd3a28bf9ed5d9ac6450064e0d71ed7496',
  'consoletvs/charts' => '6.5.5@0005d14e4fe6715f4146a4dc3b56add768233001',
  'dingo/api' => 'v3.0.6@98d40beb6241c39ce9866bc74ea5b65d011548bd',
  'dingo/blueprint' => 'v0.4.2@c330027bc85ef76639b27a900f511ce4270e28bf',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '1.11.3@3bb5588cec00a0268829cc4a518490df6741af9d',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/dbal' => '3.1.0@5ba62e7e40df119424866064faf2cef66cb5232a',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dompdf/dompdf' => 'v1.0.2@8768448244967a46d6e67b891d30878e0e15d25c',
  'dragonmantank/cron-expression' => 'v3.1.0@7a8c6e56ab3ffcc538d05e8155bb42269abf1a0c',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'enlightn/enlightn' => 'v1.22.1@b4743d1abbcaf8340729a9cada2cceced33ff2c6',
  'enlightn/security-checker' => 'v1.9.0@dc5bce653fa4d9c792e9dcffa728c0642847c1e1',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'fruitcake/laravel-cors' => 'v2.0.4@a8ccedc7ca95189ead0e407c43b530dc17791d6a',
  'genealabs/laravel-model-caching' => '0.11.3@b8ffa347f6269f32dbd4b74ed7cb0bcd700e0793',
  'genealabs/laravel-pivot-events' => '8.0@aafc9d7f6a0b31e0d58bd2b31e38253fbd27c2a9',
  'graham-campbell/markdown' => 'v13.1.1@d25b873e5c5870edc4de7d980808f1a8e092a9c7',
  'graham-campbell/result-type' => 'v1.0.1@7e279d2cd5d7fbb156ce46daada972355cea27bb',
  'guzzlehttp/guzzle' => '7.3.0@7008573787b430c1c1f650e3722d9bba59967628',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.2@dc960a912984efb74d0a90222870c72c87f10c91',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'hoa/compiler' => '3.17.08.08@aa09caf0bf28adae6654ca6ee415ee2f522672de',
  'hoa/consistency' => '1.17.05.02@fd7d0adc82410507f332516faf655b6ed22e4c2f',
  'hoa/event' => '1.17.01.13@6c0060dced212ffa3af0e34bb46624f990b29c54',
  'hoa/exception' => '1.17.01.16@091727d46420a3d7468ef0595651488bfc3a458f',
  'hoa/file' => '1.17.07.11@35cb979b779bc54918d2f9a4e02ed6c7a1fa67ca',
  'hoa/iterator' => '2.17.01.10@d1120ba09cb4ccd049c86d10058ab94af245f0cc',
  'hoa/math' => '1.17.05.16@7150785d30f5d565704912116a462e9f5bc83a0c',
  'hoa/regex' => '1.17.01.13@7e263a61b6fb45c1d03d8e5ef77668518abd5bec',
  'hoa/stream' => '1.17.02.21@3293cfffca2de10525df51436adf88a559151d82',
  'hoa/ustring' => '4.17.01.16@e6326e2739178799b1fe3fdd92029f9517fa17a0',
  'hoa/visitor' => '2.17.01.16@c18fe1cbac98ae449e0d56e87469103ba08f224a',
  'hoa/zformat' => '1.17.01.10@522c381a2a075d4b9dbb42eb4592dd09520e4ac2',
  'intervention/image' => '2.5.1@abbf18d5ab8367f96b3205ca3c89fb2fa598c69e',
  'intervention/imagecache' => '2.5.1@e714f13298ecaf9b2d11cb7106a0415d5615cbe5',
  'jaybizzle/crawler-detect' => 'v1.2.106@78bf6792cbf9c569dc0bf2465481978fd2ed0de9',
  'jenssegers/agent' => 'v2.6.4@daa11c43729510b3700bc34d414664966b03bffe',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'kkszymanowski/traitor' => '0.2.5@9770fc7de72ff585601dc9c42b31715d9fc40a24',
  'kyslik/column-sortable' => '6.4.0@9aef633bfe160c5a43d97e92e55983daa2696eb1',
  'laracasts/flash' => '3.2@76c2e200498795bdbeda97b682536130316e8b97',
  'laravel/framework' => 'v8.44.0@7b3b27dc8911ab02a69731af2ba97b5130b2ddb8',
  'laravel/slack-notification-channel' => 'v2.3.1@f428e76b8d0a0a2ff413ab225eeb829b9a8ffc20',
  'laravel/tinker' => 'v2.6.1@04ad32c1a3328081097a181875733fa51f402083',
  'laravel/ui' => 'v3.3.0@07d725813350c695c779382cbd6dac0ab8665537',
  'laravelcollective/html' => 'v6.2.1@ae15b9c4bf918ec3a78f092b8555551dd693fde3',
  'league/commonmark' => '1.6.2@7d70d2f19c84bcc16275ea47edabee24747352eb',
  'league/flysystem' => '1.1.3@9be3b16c877d477357c015cec057548cf9b2a14a',
  'league/flysystem-aws-s3-v3' => '1.0.29@4e25cc0582a36a786c31115e419c6e40498f6972',
  'league/fractal' => '0.19.2@06dc15f6ba38f2dde2f919d3095d13b571190a7c',
  'league/mime-type-detection' => '1.7.0@3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
  'league/oauth2-client' => '2.6.0@badb01e62383430706433191b82506b6df24ad98',
  'league/omnipay' => 'v3.1.0@1ba7c8a3312cf2342458b99c9e5b86eaae44aed2',
  'livewire/livewire' => 'v2.3.18@c0c78f430e4151fb6902bbb88c75e782d2549e1a',
  'lorisleiva/laravel-search-string' => 'v1.1.3@366f5584f2ae13d6751644f05079f2c0d6634c0e',
  'maatwebsite/excel' => '3.1.30@aa5d2e4d25c5c8218ea0a15103da95f5f8728953',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '2.0.2@d18272926d58065140314c01e18ec3dd7ae854ea',
  'markbaker/matrix' => '2.1.3@174395a901b5ba0925f1d790fa91bab531074b61',
  'maximebf/debugbar' => 'v1.16.5@6d51ee9e94cff14412783785e79a4e7ef97b9d62',
  'mnsami/composer-custom-directory-installer' => '2.0.0@85f66323978d0b1cb0e6acc7f69b3e7b912f82d9',
  'mobiledetect/mobiledetectlib' => '2.8.37@9841e3c46f5bd0739b53aed8ac677fa712943df7',
  'mockery/mockery' => '1.4.3@d1339f64479af1bee0e82a0413813fe5345a54ea',
  'moneyphp/money' => 'v3.3.1@122664c2621a95180a13c1ac81fea1d2ef20781e',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'monooso/unobserve' => 'v3.0.0@e7cc357d405ecf73b392604d49e65359cd471d24',
  'mtdowling/jmespath.php' => '2.6.0@42dae2cbd13154083ca6d70099692fef8ca84bfb',
  'myclabs/php-enum' => '1.8.0@46cf3d8498b095bd33727b13fd5707263af99421',
  'nesbot/carbon' => '2.48.1@8d1f50f1436fb4b05e7127360483dd9c6e73da16',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'nunomaduro/larastan' => 'v0.7.6@1dff40b931885001c696c9eb4af90e7d1599bb08',
  'omnipay/common' => 'v3.0.5@0d1f4486c1c873537ac030d37c7ce2986c4de1d2',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'phenx/php-font-lib' => '0.5.2@ca6ad461f032145fff5971b5985e5af9e7fa88d8',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'php-http/discovery' => '1.13.0@788f72d64c43dc361e7fcc7464c3d947c64984a7',
  'php-http/guzzle7-adapter' => '0.1.1@1967de656b9679a2a6a66d0e4e16fa99bbed1ad1',
  'php-http/httplug' => '2.2.0@191a0a1b41ed026b717421931f8d3bd2514ffbf9',
  'php-http/message' => '1.11.1@887734d9c515ad9a564f6581a682fff87a6253cc',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpoffice/phpspreadsheet' => '1.16.0@76d4323b85129d0c368149c831a07a3e258b2b50',
  'phpoption/phpoption' => '1.7.5@994ecccd8f3283ecf5ac33254543eb0ac946d525',
  'phpstan/phpstan' => '0.12.88@464d1a81af49409c41074aa6640ed0c4cbd9bb68',
  'plank/laravel-mediable' => '5.1.1@c26f8b3ebb2e1d3db8202dec83b3135f77ec4b88',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.8@e4573f47750dd6c92dca5aee543fa77513cbd8d3',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.1.3@28a5c4ab2f5111db6a60b2b4ec84057e0f43b9c1',
  'ramsey/uuid' => '4.1.1@cd4032040a750077205918c86049aa0f43d22947',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'riverskies/laravel-mobile-detect' => '1.3@0ddb27d31a4a1148875424426b9feda6598f2f14',
  'sabberworm/php-css-parser' => '8.3.1@d217848e1396ef962fb1997cf3e2421acba7f796',
  'sanmai/hoa-protocol' => '1.21@3cf1a72c12fed6aa0169433a10f0275face91362',
  'santigarcor/laratrust' => '6.3.2@9ab3bfdc06afe18b17f69b77cb77291c36dae9f6',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'seld/phar-utils' => '1.1.1@8674b1d84ffb47cc59a101f5d5a3b61e87d23796',
  'simshaun/recurr' => 'v4.0.5@08b0b46879f598cd11dd42b4c1a9c221a0562749',
  'staudenmeir/belongs-to-through' => 'v2.11.1@d300afa1045e6541b79af2291336312613b5cd02',
  'staudenmeir/eloquent-has-many-deep' => 'v1.13.1@c0c9b6bd5c39d08e8adddc7eb8625962bd67a3da',
  'swiftmailer/swiftmailer' => 'v6.2.7@15f7faf8508e04471f666633addacf54c0ab5933',
  'symfony/console' => 'v5.2.8@864568fdc0208b3eba3638b6000b69d2386e6768',
  'symfony/css-selector' => 'v5.2.9@5d5f97809015102116208b976eb2edb44b689560',
  'symfony/debug' => 'v4.4.22@45b2136377cca5f10af858968d6079a482bca473',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/error-handler' => 'v5.2.8@1416bc16317a8188aabde251afef7618bf4687ac',
  'symfony/event-dispatcher' => 'v5.2.4@d08d6ec121a425897951900ab692b612a61d6240',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/filesystem' => 'v5.2.7@056e92acc21d977c37e6ea8e97374b2a6c8551b0',
  'symfony/finder' => 'v5.2.9@ccccb9d48ca42757dd12f2ca4bf857a4e217d90d',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.2.8@e8fbbab7c4a71592985019477532629cb2e142dc',
  'symfony/http-kernel' => 'v5.2.9@eb540ef6870dbf33c92e372cfb869ebf9649e6cb',
  'symfony/mime' => 'v5.2.9@64258e870f8cc75c3dae986201ea2df58c210b52',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-iconv' => 'v1.23.0@63b5bb7db83e5673936d6e3b8b3e022ff6474933',
  'symfony/polyfill-intl-grapheme' => 'v1.23.0@24b72c6baa32c746a4d0840147c9715e42bb68ab',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/process' => 'v5.2.7@98cb8eeb72e55d4196dd1e36f1f16e7b3a9a088e',
  'symfony/routing' => 'v5.2.9@4a7b2bf5e1221be1902b6853743a9bb317f6925e',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/string' => 'v5.2.8@01b35eb64cac8467c3f94cd0ce2d0d376bb7d1db',
  'symfony/translation' => 'v5.2.9@61af68dba333e2d376a325a29c2a3f2a605b4876',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/var-dumper' => 'v5.2.8@d693200a73fae179d27f8f1b16b4faf3e8569eba',
  'symfony/yaml' => 'v5.2.9@d23115e4a3d50520abddccdbec9514baab1084c8',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'vlucas/phpdotenv' => 'v5.3.0@b3eac5c7ac896e52deab4a99068e3f4ab12d9e56',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'akaunting/akaunting' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
