<?php

declare(strict_types=1);

namespace Doctrine\Tests\Inflector\Rules\English;

use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\InflectorFactory;
use Doctrine\Inflector\Language;
use Doctrine\Tests\Inflector\Rules\LanguageFunctionalTest;

use function sprintf;

class EnglishFunctionalTest extends LanguageFunctionalTest
{
    /** @return string[][] */
    public function dataSampleWords(): array
    {
        return [
            ['', ''],
            ['ability', 'abilities'],
            ['abuse', 'abuses'],
            ['acceptancecriterion', 'acceptancecriteria'],
            ['address', 'addresses'],
            ['advice', 'advice'],
            ['agency', 'agencies'],
            ['aircraft', 'aircraft'],
            ['alias', 'aliases'],
            ['alumnus', 'alumni'],
            ['amoyese', 'amoyese'],
            ['analysis', 'analyses'],
            ['aquarium', 'aquaria'],
            ['arch', 'arches'],
            ['archive', 'archives'],
            ['art', 'art'],
            ['atlas', 'atlases'],
            ['audio', 'audio'],
            ['avalanche', 'avalanches'],
            ['axe', 'axes'],
            ['baby', 'babies'],
            ['bacillus', 'bacilli'],
            ['bacterium', 'bacteria'],
            ['baggage', 'baggage'],
            ['basis', 'bases'],
            ['bison', 'bison'],
            ['blouse', 'blouses'],
            ['borghese', 'borghese'],
            ['box', 'boxes'],
            ['bream', 'bream'],
            ['breeches', 'breeches'],
            ['britches', 'britches'],
            ['buffalo', 'buffalo'],
            ['bureau', 'bureaus'],
            ['bus', 'buses'],
            ['butter', 'butter'],
            ['cache', 'caches'],
            ['cactus', 'cacti'],
            ['cafe', 'cafes'],
            ['calf', 'calves'],
            ['cantus', 'cantus'],
            ['canvas', 'canvases'],
            ['carp', 'carp'],
            ['case', 'cases'],
            ['cave', 'caves'],
            ['categoria', 'categorias'],
            ['category', 'categories'],
            ['cattle', 'cattle'],
            ['chassis', 'chassis'],
            ['chateau', 'chateaux'],
            ['cherry', 'cherries'],
            ['child', 'children'],
            ['church', 'churches'],
            ['circus', 'circuses'],
            ['city', 'cities'],
            ['clippers', 'clippers'],
            ['clothes', 'clothes'],
            ['clothing', 'clothing'],
            ['coal', 'coal'],
            ['cod', 'cod'],
            ['coitus', 'coitus'],
            ['comment', 'comments'],
            ['compensation', 'compensation'],
            ['congoese', 'congoese'],
            ['contretemps', 'contretemps'],
            ['cookie', 'cookies'],
            ['brownie', 'brownies'],
            ['copy', 'copies'],
            ['coreopsis', 'coreopsis'],
            ['corps', 'corps'],
            ['cotton', 'cotton'],
            ['cow', 'cows'],
            ['crisis', 'crises'],
            ['criterion', 'criteria'],
            ['currency', 'currencies'],
            ['curriculum', 'curricula'],
            ['curve', 'curves'],
            ['data', 'data'],
            ['database', 'databases'],
            ['day', 'days'],
            ['debris', 'debris'],
            ['deer', 'deer'],
            ['demo', 'demos'],
            ['diabetes', 'diabetes'],
            ['diagnosis', 'diagnoses'],
            ['diagnosis_a', 'diagnosis_as'],
            ['dictionary', 'dictionaries'],
            ['dive', 'dives'],
            ['djinn', 'djinn'],
            ['domino', 'dominoes'],
            ['dwarf', 'dwarves'],
            ['echo', 'echoes'],
            ['edge', 'edges'],
            ['education', 'education'],
            ['eland', 'eland'],
            ['elf', 'elves'],
            ['elk', 'elk'],
            ['emoji', 'emoji'],
            ['emphasis', 'emphases'],
            ['employee-child', 'employee-children'],
            ['energy', 'energies'],
            ['epoch', 'epochs'],
            ['equipment', 'equipment'],
            ['evidence', 'evidence'],
            ['experience', 'experiences'],
            ['family', 'families'],
            ['faroese', 'faroese'],
            ['fax', 'faxes'],
            ['feedback', 'feedback'],
            ['fish', 'fish'],
            ['fix', 'fixes'],
            ['flounder', 'flounder'],
            ['flour', 'flour'],
            ['flush', 'flushes'],
            ['fly', 'flies'],
            ['focus', 'foci'],
            ['foe', 'foes'],
            ['foobar', 'foobars'],
            ['foochowese', 'foochowese'],
            ['food', 'food'],
            ['food_menu', 'food_menus'],
            ['foodmenu', 'foodmenus'],
            ['foot', 'feet'],
            ['fungus', 'fungi'],
            ['furniture', 'furniture'],
            ['gallows', 'gallows'],
            ['gas', 'gases'],
            ['genevese', 'genevese'],
            ['genoese', 'genoese'],
            ['genus', 'genera'],
            ['gilbertese', 'gilbertese'],
            ['glove', 'gloves'],
            ['gold', 'gold'],
            ['goose', 'geese'],
            ['grave', 'graves'],
            ['gulf', 'gulfs'],
            ['half', 'halves'],
            ['hardware', 'hardware'],
            ['headquarters', 'headquarters'],
            ['hero', 'heroes'],
            ['herpes', 'herpes'],
            ['hijinks', 'hijinks'],
            ['hippopotamus', 'hippopotami'],
            ['hoax', 'hoaxes'],
            ['homework', 'homework'],
            ['horse', 'horses'],
            ['hottentotese', 'hottentotese'],
            ['house', 'houses'],
            ['human', 'humans'],
            ['identity', 'identities'],
            ['impatience', 'impatience'],
            ['index', 'indices'],
            ['information', 'information'],
            ['innings', 'innings'],
            ['iris', 'irises'],
            ['jackanapes', 'jackanapes'],
            ['jeans', 'jeans'],
            ['jedi', 'jedi'],
            ['kin', 'kin'],
            ['kiplingese', 'kiplingese'],
            ['kiss', 'kisses'],
            ['kitchenware', 'kitchenware'],
            ['knife', 'knives'],
            ['knowledge', 'knowledge'],
            ['kongoese', 'kongoese'],
            ['larva', 'larvae'],
            ['leaf', 'leaves'],
            ['leather', 'leather'],
            ['lens', 'lenses'],
            ['life', 'lives'],
            ['loaf', 'loaves'],
            ['louse', 'lice'],
            ['love', 'love'],
            ['lucchese', 'lucchese'],
            ['luggage', 'luggage'],
            ['mackerel', 'mackerel'],
            ['maltese', 'maltese'],
            ['man', 'men'],
            ['management', 'management'],
            ['matrix', 'matrices'],
            ['matrix_fu', 'matrix_fus'],
            ['matrix_row', 'matrix_rows'],
            ['medium', 'media'],
            ['memorandum', 'memoranda'],
            ['menu', 'menus'],
            ['mess', 'messes'],
            ['metadata', 'metadata'],
            ['mews', 'mews'],
            ['middleware', 'middleware'],
            ['money', 'money'],
            ['moose', 'moose'],
            ['motto', 'mottoes'],
            ['mouse', 'mice'],
            ['move', 'moves'],
            ['movie', 'movies'],
            ['mumps', 'mumps'],
            ['music', 'music'],
            ['my_analysis', 'my_analyses'],
            ['nankingese', 'nankingese'],
            ['neurosis', 'neuroses'],
            ['news', 'news'],
            ['newsletter', 'newsletters'],
            ['nexus', 'nexus'],
            ['niasese', 'niasese'],
            ['niveau', 'niveaux'],
            ['node_child', 'node_children'],
            ['nodemedia', 'nodemedia'],
            ['nucleus', 'nuclei'],
            ['nutrition', 'nutrition'],
            ['oasis', 'oases'],
            ['octopus', 'octopuses'],
            ['offspring', 'offspring'],
            ['oil', 'oil'],
            ['old_news', 'old_news'],
            ['olive', 'olives'],
            ['ox', 'oxen'],
            ['pactum', 'pacta'],
            ['pants', 'pants'],
            ['pass', 'passes'],
            ['passerby', 'passersby'],
            ['pasta', 'pastas'],
            ['patience', 'patience'],
            ['pekingese', 'pekingese'],
            ['person', 'people'],
            ['perspective', 'perspectives'],
            ['photo', 'photos'],
            ['piedmontese', 'piedmontese'],
            ['pincers', 'pincers'],
            ['pistoiese', 'pistoiese'],
            ['plankton', 'plankton'],
            ['plateau', 'plateaux'],
            ['pliers', 'pliers'],
            ['pokemon', 'pokemon'],
            ['police', 'police'],
            ['polish', 'polish'],
            ['portfolio', 'portfolios'],
            ['portuguese', 'portuguese'],
            ['potato', 'potatoes'],
            ['powerhouse', 'powerhouses'],
            ['prize', 'prizes'],
            ['proceedings', 'proceedings'],
            ['process', 'processes'],
            ['progress', 'progress'],
            ['query', 'queries'],
            ['quiz', 'quizzes'],
            ['rabies', 'rabies'],
            ['radius', 'radii'],
            ['rain', 'rain'],
            ['reflex', 'reflexes'],
            ['regatta', 'regattas'],
            ['research', 'research'],
            ['rhinoceros', 'rhinoceros'],
            ['rice', 'rice'],
            ['roof', 'roofs'],
            ['runner-up', 'runners-up'],
            ['safe', 'safes'],
            ['salesperson', 'salespeople'],
            ['salmon', 'salmon'],
            ['sand', 'sand'],
            ['sarawakese', 'sarawakese'],
            ['save', 'saves'],
            ['scarf', 'scarves'],
            ['scissors', 'scissors'],
            ['scratch', 'scratches'],
            ['sea-bass', 'sea-bass'],
            ['sea bass', 'sea bass'],
            ['search', 'searches'],
            ['series', 'series'],
            ['sex', 'sexes'],
            ['shavese', 'shavese'],
            ['shears', 'shears'],
            ['sheep', 'sheep'],
            ['shelf', 'shelves'],
            ['shoe', 'shoes'],
            ['shorts', 'shorts'],
            ['siemens', 'siemens'],
            ['sieve', 'sieves'],
            ['silk', 'silk'],
            ['sku', 'skus'],
            ['slice', 'slices'],
            ['sms', 'sms'],
            ['soap', 'soap'],
            ['social media', 'social media'],
            ['socialmedia', 'socialmedia'],
            ['software', 'software'],
            ['son-in-law', 'sons-in-law'],
            ['spam', 'spam'],
            ['species', 'species'],
            ['splash', 'splashes'],
            ['spokesman', 'spokesmen'],
            ['spouse', 'spouses'],
            ['spy', 'spies'],
            ['stack', 'stacks'],
            ['stadium', 'stadiums'],
            ['staff', 'staff'],
            ['status', 'statuses'],
            ['status_code', 'status_codes'],
            ['stimulus', 'stimuli'],
            ['stitch', 'stitches'],
            ['story', 'stories'],
            ['stratum', 'strata'],
            ['sugar', 'sugar'],
            ['swine', 'swine'],
            ['switch', 'switches'],
            ['syllabus', 'syllabi'],
            ['talent', 'talent'],
            ['tax', 'taxes'],
            ['taxi', 'taxis'],
            ['taxon', 'taxa'],
            ['terminus', 'termini'],
            ['testis', 'testes'],
            ['thesis', 'theses'],
            ['Thief', 'Thieves'],
            ['tights', 'tights'],
            ['tomato', 'tomatoes'],
            ['tooth', 'teeth'],
            ['toothpaste', 'toothpaste'],
            ['tornado', 'tornadoes'],
            ['traffic', 'traffic'],
            ['travel', 'travel'],
            ['trivia', 'trivia'],
            ['trousers', 'trousers'],
            ['trout', 'trout'],
            ['try', 'tries'],
            ['tuna', 'tuna'],
            ['us', 'us'],
            ['valve', 'valves'],
            ['vermontese', 'vermontese'],
            ['vertex', 'vertices'],
            ['vinegar', 'vinegar'],
            ['virus', 'viri'],
            ['volcano', 'volcanoes'],
            ['ware', 'wares'],
            ['wash', 'washes'],
            ['watch', 'watches'],
            ['wave', 'waves'],
            ['weather', 'weather'],
            ['wenchowese', 'wenchowese'],
            ['wharf', 'wharves'],
            ['wheat', 'wheat'],
            ['whiting', 'whiting'],
            ['wife', 'wives'],
            ['wildebeest', 'wildebeest'],
            ['wish', 'wishes'],
            ['woman', 'women'],
            ['wood', 'wood'],
            ['wool', 'wool'],
            ['work', 'works'],
            ['yengeese', 'yengeese'],
            ['zombie', 'zombies'],
            ['|ice', '|ices'],
        ];
    }

    /**
     * Singulars as Plural test data.
     *
     * A list of singulars that should not yield the given result if passed through `singularize`.
     * Returns an array of sample words.
     *
     * @return string[][]
     */
    public function dataSingularsUninflectedWhenSingularized(): array
    {
        // In the format array('singular', 'notEquals')
        return [
            ['fuchsia', 'fuchsium'],
            ['militia', 'militium'],
            ['galleria', 'gallerium'],
            ['petunia', 'petunium'],
            ['trivia', 'trivium'],
            ['utopia', 'utopium'],
            ['sepia', 'sepium'],
            ['mafia', 'mafium'],
            ['regatta', 'regattum'],
            ['regattas', 'regattum'],
            ['pactum', 'pactums'],
            ['fascia', 'fascium'],
            ['status', 'statu'],
            ['stratum', 'strati'],
            ['stratum', 'stratums'],
            ['campus', 'campu'],
            ['axis', 'axes'],
        ];
    }

    /** @dataProvider dataSingularsUninflectedWhenSingularized */
    public function testSingularsWhenSingularizedShouldBeUninflected(string $singular, string $notEquals): void
    {
        self::assertNotSame(
            $notEquals,
            $this->createInflector()->singularize($singular),
            sprintf("'%s' should not be singularized to '%s'", $singular, $notEquals)
        );
    }

    /**
     * Words without plural test data.
     *
     * List of words that don't have a plural form.
     *
     * @return string[][]
     */
    public function dataPluralUninflectedWhenPluralized(): array
    {
        return [
            ['media'],
        ];
    }

    /** @dataProvider dataPluralUninflectedWhenPluralized */
    public function testPluralsWhenPluralizedShouldBeUninflected(string $plural): void
    {
        $pluralized = $this->createInflector()->pluralize($plural);

        self::assertSame(
            $plural,
            $pluralized,
            sprintf("'%s' should not be pluralized to '%s'", $plural, $pluralized)
        );
    }

    protected function createInflector(): Inflector
    {
        return InflectorFactory::createForLanguage(Language::ENGLISH)->build();
    }
}
