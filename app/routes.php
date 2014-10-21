<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//main page
Route::get('/', function()
{
	return View::make('index');
	
});

//text generator

Route::get('/lorem', function()
{

$num = Input::get('num');
	
if ($num > 20) 
{
	$num=20;
}

$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($num);

$someparas = implode('<p>', $paragraphs);

return View::make('lorem')->with('someparas', $someparas);

});


Route::get('/users', function()
{
	$numusers = Input::get('numusers');

	if ($numusers > 50) 
{
	$numusers=50;
}

return View::make('users')->with('numusers', $numusers);
});	



Route::get('/csv', function()
{
	$numusers = Input::get('numusers');
	if ($numusers > 50) 
{
	$numusers=50;
}


return View::make('csv')->with('numusers', $numusers);
});	




Route::get('/password', function()
{

$numofwords = Input::get('numofwords');
	

global $theword;

$mots = array ("aardvark", "albatross", "alligator", "alpaca", "ant", "anteater", "antelope", "ape", "armadillo", "baboon", "badger", "barracuda", "bat", "bear", "beaver", "bee", "bison", "boar", "butterfly", "camel", "capybara", "caribou", "cassowary", "cat", "caterpillar", "chamois", "cheetah", "chicken", "chimpanzee", "chinchilla", "chough", "clam", "cobra", "cockroach", "cod", "cormorant", "coyote", "crab", "crane", "crocodile", "crow", "curlew", "deer", "dinosaur", "dog", "dogfish", "dolphin", "dotterel", "dove", "dragonfly", "duck", "dugong", "dunlin", "eagle", "echidna", "eel", "eland", "elephant", "emu", "falcon", "ferret", "finch", "fish", "flamingo", "fly", "fox", "frog", "gaur", "gazelle", "gerbil", "giraffe", "gnat", "gnu", "goat", "goldfinch", "goldfish", "goose", "gorilla", "goshawk", "grasshopper", "grouse", "guanaco", "gull", "hamster", "hare", "hawk", "hedgehog", "heron", "herring", "hippopotamus", "hornet", "horse", "human", "hummingbird", "hyena", "ibex", "ibis", "jackal", "jaguar", "jay", "jellyfish", "kangaroo", "kingfisher", "koala", "kookabura", "kouprey", "kudu", "lapwing", "lark", "lemur", "leopard", "lion", "llama", "lobster", "locust", "loris", "louse", "lyrebird", "magpie", "mallard", "manatee", "mandrill", "mantis", "marten", "meerkat", "mink", "mole", "mongoose", "monkey", "moose", "mosquito", "mouse", "mule", "narwhal", "newt", "nightingale", "octopus", "okapi", "opossum", "oryx", "ostrich", "otter", "owl", "oyster", "panther", "parrot", "partridge", "peafowl", "pelican", "penguin", "pheasant", "pig", "pigeon", "porcupine", "porpoise", "quail", "quelea", "quetzal", "rabbit", "raccoon", "rail", "ram", "rat", "raven", "reindeer", "rhinoceros", "rook", "salamander", "salmon", "sandpiper", "sardine", "scorpion", "seahorse", "seal", "shark", "sheep", "shrew", "skunk", "snail", "snake", "sparrow", "spider", "spoonbill", "squid", "squirrel", "starling", "stingray", "stinkbug", "stork", "swallow", "swan", "tapir", "tarsier", "termite", "tiger", "toad", "trout", "turkey", "turtle", "viper", "vulture", "wallaby", "walrus", "wasp", "weasel", "whale", "wolf", "wolverine", "wombat", "woodcock", "woodpecker", "worm", "wren", "yak", "zebra", "absolute", "abstract", "absurd", "accident", "actuality", "aesthetics", "fortiori", "agnosticism", "altruism", "amoral", "analytic", "angst", "anthropomorphism", "antinomy", "antithesis", "apologetics", "posteriori", "priori", "archetype", "aristotelianism", "atheism", "attribute", "augustinianism", "autonomy", "axiology", "being", "categorical", "imperative", "causality", "coherence", "contingent", "correspondence", "cosmological", "cosmos", "deductive", "deism", "determinism", "dialectic", "doubt", "dualism", "empiricism", "epicureanism", "epistemology", "essence", "ethics", "existentialism", "fideism", "finite", "form", "formal", "foundationalism", "hedonism", "humanism", "idealism", "immanent", "independent", "indeterminism", "indubitable", "inductive", "reasoning", "infinite", "innate", "intuition", "logic", "cause", "materialism", "metaphysics", "monism", "moral", "naturalism", "nihilism", "noetic", "noumena", "objective", "ockham", "razor", "ontological", "ontology", "pantheism", "phenomena", "philosophy", "platonism", "pluralism", "pragmatism", "rationalism", "realism", "relativism", "skepticism", "socratic", "method", "solipsism", "subjective", "idealism", "substance", "tabularasa", "teleological", "argument", "theism", "thomism", "transcendent", "weltanschauung", "eats", "hits", "loves", "pushes", "adds", "allows", "bakes", "bangs", "calls", "chases", "damages", "drops", "ends", "escapes", "fastens", "fixes", "gathers", "grabs",  "hangs", "hugs", "imagines", "itchs", "jogs", "jumps", "kicks", "knits", "lands", "locks", "mixes", "names", "notices", "obeys", "opens", "passes", "promises", "questions", "reaches", "rinses", "scatters", "stays", "talks", "turns", "unties", "uses", "visits", "walks", "works", "yawns", "yells", "zips");


if ($numofwords < 1)  //handle zero words
{
   $numofwords = 1;
}

if ($numofwords > 9)  //handle many words
{
   $numofwords = 9;
}

 
for ($i = 1; $i <= $numofwords; $i++) 
{
    $rmot = rand(0, 355);
///////////////////////////////////////////
$theword2 = $mots[$rmot];
$theword2 .= '-';
$theword .= $theword2;


}
$numbs = rand(0, 9); 

$theword .= $numbs;
return View::make('password')->with('theword', $theword);

});