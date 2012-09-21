<?php

/*
 * Copyright 2012 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Contains default spelling correction rules for ArcanistSpellingLinter.
 * Inside its own file to keep logic of ArcanistSpellingLinter clean
 *
 * @nolint
 * @group linter
 */
class ArcanistSpellingDefaultData {
  // From http://cpansearch.perl.org/src/APOCAL/Pod-Spell-CommonMistakes-1.000/lib/Pod/Spell/CommonMistakes/WordList.pm
  // Pruned by hand.  If you modify this list, remember to remove case only
  // spelling suggestions and any with special characters like - or '
  public static function getFullWordRules() {
    return array(
      array(
        // Variable common
       "abandonning" => "abandoning",
       "abigious" => "ambiguous",
       "abitrate" => "arbitrate",
       "absense" => "absence",
       "absolut" => "absolute",
       "absoulte" => "absolute",
       "acceleratoin" => "acceleration",
       "accelleration" => "acceleration",
       "accesing" => "accessing",
       "accesnt" => "accent",
       "accessable" => "accessible",
       "accidentaly" => "accidentally",
       "accidentually" => "accidentally",
       "accomodate" => "accommodate",
       "accomodates" => "accommodates",
       "accout" => "account",
       "acessable" => "accessible",
       "ackowledge" => "acknowledge",
       "ackowledged" => "acknowledged",
       "acknowldegement" => "acknowldegement",
       "acording" => "according",
       "activete" => "activate",
       "acumulating" => "accumulating",
       "addional" => "additional",
       "additionaly" => "additionally",
       "addreses" => "addresses",
       "aditional" => "additional",
       "aditionally" => "additionally",
       "aditionaly" => "additionally",
       "adress" => "address",
       "adresses" => "addresses",
       "adviced" => "advised",
       "afecting" => "affecting",
       "albumns" => "albums",
       "alegorical" => "allegorical",
       "algorith" => "algorithm",
       "algorithmical" => "algorithmically",
       "algoritm" => "algorithm",
       "algoritms" => "algorithms",
       "algorrithm" => "algorithm",
       "algorritm" => "algorithm",
       "allpication" => "application",
       "altough" => "although",
       "ambigious" => "ambiguous",
       "amoung" => "among",
       "amout" => "amount",
       "analysator" => "analyzer",
       "anniversery" => "anniversary",
       "annoucement" => "announcement",
       "anomolies" => "anomalies",
       "anomoly" => "anomaly",
       "aplication" => "application",
       "appearence" => "appearance",
       "appropiate" => "appropriate",
       "appropriatly" => "appropriately",
       "aquired" => "acquired",
       "arbitary" => "arbitrary",
       "architechture" => "architecture",
       "arguement" => "argument",
       "arguements" => "arguments",
       "aritmetic" => "arithmetic",
       "arraival" => "arrival",
       "artifical" => "artificial",
       "artillary" => "artillery",
       "assigment" => "assignment",
       "assigments" => "assignments",
       "assistent" => "assistant",
       "asuming" => "assuming",
       "atomatically" => "automatically",
       "attemps" => "attempts",
       "attruibutes" => "attributes",
       "authentification" => "authentication",
       "automaticaly" => "automatically",
       "automaticly" => "automatically",
       "automatize" => "automate",
       "automatized" => "automated",
       "automatizes" => "automates",
       "autonymous" => "autonomous",
       "auxilliary" => "auxiliary",
       "avaiable" => "available",
       "availabled" => "available",
       "availablity" => "availability",
       "availale" => "available",
       "availavility" => "availability",
       "availble" => "available",
       "availiable" => "available",
       "avaliable" => "available",
       "backgroud" => "background",
       "bahavior" => "behavior",
       "baloon" => "balloon",
       "baloons" => "balloons",
       "batery" => "battery",
       "becomming" => "becoming",
       "becuase" => "because",
       "begining" => "beginning",
       "calender" => "calendar",
       "cancelation" => "cancellation",
       "capabilites" => "capabilities",
       "capatibilities" => "capabilities",
       "cariage" => "carriage",
       "challange" => "challenge",
       "challanges" => "challenges",
       "changable" => "changeable",
       "charachter" => "character",
       "charachters" => "characters",
       "charcter" => "character",
       "childs" => "children",
       "chnage" => "change",
       "chnages" => "changes",
       "choosen" => "chosen",
       "collapsable" => "collapsible",
       "colorfull" => "colorful",
       "comand" => "command",
       "comit" => "commit",
       "commerical" => "commercial",
       "comminucation" => "communication",
       "commited" => "committed",
       "commiting" => "committing",
       "committ" => "commit",
       "commoditiy" => "commodity",
       "compability" => "compatibility",
       "compatability" => "compatibility",
       "compatable" => "compatible",
       "compatibiliy" => "compatibility",
       "compatibilty" => "compatibility",
       "compleatly" => "completely",
       "completly" => "completely",
       "complient" => "compliant",
       "compres" => "compress",
       "compresion" => "compression",
       "configuratoin" => "configuration",
       "conjuction" => "conjunction",
       "connectinos" => "connections",
       "connnection" => "connection",
       "connnections" => "connections",
       "consistancy" => "consistency",
       "containes" => "contains",
       "containts" => "contains",
       "contence" => "contents",
       "continous" => "continuous",
       "continueing" => "continuing",
       "contraints" => "constraints",
       "convertor" => "converter",
       "convinient" => "convenient",
       "corected" => "corrected",
       "correponding" => "corresponding",
       "correponds" => "corresponds",
       "correspoding" => "corresponding",
       "cryptocraphic" => "cryptographic",
       "curently" => "currently",
       "dafault" => "default",
       "deafult" => "default",
       "deamon" => "daemon",
       "decompres" => "decompress",
       "definate" => "definite",
       "definately" => "definitely",
       "delemiter" => "delimiter",
       "dependancies" => "dependencies",
       "dependancy" => "dependency",
       "dependant" => "dependent",
       "desactivate" => "deactivate",
       "detabase" => "database",
       "developement" => "development",
       "developped" => "developed",
       "developpement" => "development",
       "developper" => "developer",
       "deveolpment" => "development",
       "devided" => "divided",
       "dictionnary" => "dictionary",
       "diplay" => "display",
       "disapeared" => "disappeared",
       "discontiguous" => "noncontiguous",
       "dispertion" => "dispersion",
       "dissapears" => "disappears",
       "docuentation" => "documentation",
       "documantation" => "documentation",
       "documentaion" => "documentation",
       "downlad" => "download",
       "downlads" => "downloads",
       "easilly" => "easily",
       "ecspecially" => "especially",
       "edditable" => "editable",
       "editting" => "editing",
       "eletronic" => "electronic",
       "enchanced" => "enhanced",
       "encorporating" => "incorporating",
       "endianess" => "endianness",
       "enhaced" => "enhanced",
       "enlightnment" => "enlightenment",
       "enocded" => "encoded",
       "enterily" => "entirely",
       "enviroiment" => "environment",
       "enviroment" => "environment",
       "environement" => "environment",
       "environent" => "environment",
       "equivelant" => "equivalent",
       "equivilant" => "equivalent",
       "excecutable" => "executable",
       "exceded" => "exceeded",
       "excellant" => "excellent",
       "exlcude" => "exclude",
       "exlcusive" => "exclusive",
       "expecially" => "especially",
       "explicitely" => "explicitly",
       "expresion" => "expression",
       "exprimental" => "experimental",
       "extention" => "extension",
       "failuer" => "failure",
       "familar" => "familiar",
       "fatser" => "faster",
       "feauture" => "feature",
       "feautures" => "features",
       "fetaure" => "feature",
       "fetaures" => "features",
       "forse" => "force",
       "fortan" => "fortran",
       "forwardig" => "forwarding",
       "framwork" => "framework",
       "fuction" => "function",
       "fuctions" => "functions",
       "functionaly" => "functionally",
       "functionnality" => "functionality",
       "functonality" => "functionality",
       "futhermore" => "furthermore",
       "generiously" => "generously",
       "grahical" => "graphical",
       "grahpical" => "graphical",
       "grapic" => "graphic",
       "guage" => "gauge",
       "halfs" => "halves",
       "heirarchically" => "hierarchically",
       "helpfull" => "helpful",
       "hierachy" => "hierarchy",
       "hierarchie" => "hierarchy",
       "howver" => "however",
       "immeadiately" => "immediately",
       "implemantation" => "implementation",
       "implemention" => "implementation",
       "incomming" => "incoming",
       "incompatabilities" => "incompatibilities",
       "incompatable" => "incompatible",
       "inconsistant" => "inconsistent",
       "indendation" => "indentation",
       "indended" => "intended",
       "independant" => "independent",
       "informatiom" => "information",
       "informations" => "information",
       "infromation" => "information",
       "initalize" => "initialize",
       "initators" => "initiators",
       "initializiation" => "initialization",
       "inofficial" => "unofficial",
       "integreated" => "integrated",
       "integrety" => "integrity",
       "integrey" => "integrity",
       "intendet" => "intended",
       "interchangable" => "interchangeable",
       "intermittant" => "intermittent",
       "interupted" => "interrupted",
       "jave" => "java",
       "langage" => "language",
       "langauage" => "language",
       "langugage" => "language",
       "lauch" => "launch",
       "lesstiff" => "lesstif",
       "libaries" => "libraries",
       "libary" => "library",
       "libraris" => "libraries",
       "licenceing" => "licencing",
       "loggging" => "logging",
       "loggin" => "login",
       "logile" => "logfile",
       "machinary" => "machinery",
       "maintainance" => "maintenance",
       "maintainence" => "maintenance",
       "makeing" => "making",
       "malplace" => "misplace",
       "malplaced" => "misplaced",
       "managable" => "manageable",
       "manoeuvering" => "maneuvering",
       "mathimatical" => "mathematical",
       "mathimatic" => "mathematic",
       "mathimatics" => "mathematics",
       "ment" => "meant",
       "messsage" => "message",
       "messsages" => "messages",
       "microprocesspr" => "microprocessor",
       "milliseonds" => "milliseconds",
       "miscelleneous" => "miscellaneous",
       "misformed" => "malformed",
       "mispelled" => "misspelled",
       "mmnemonic" => "mnemonic",
       "modulues" => "modules",
       "monochorome" => "monochrome",
       "monochromo" => "monochrome",
       "monocrome" => "monochrome",
       "mroe" => "more",
       "multidimensionnal" => "multidimensional",
       "mulitplied" => "multiplied",
       "mutiple" => "multiple",
       "nam" => "name",
       "nams" => "names",
       "navagating" => "navigating",
       "nead" => "need",
       "neccesary" => "necessary",
       "neccessary" => "necessary",
       "necesary" => "necessary",
       "negotation" => "negotiation",
       "nescessary" => "necessary",
       "nessessary" => "necessary",
       "noticable" => "noticeable",
       "notications" => "notifications",
       "omitt" => "omit",
       "ommitted" => "omitted",
       "onself" => "oneself",
       "optionnal" => "optional",
       "optmizations" => "optimizations",
       "orientatied" => "orientated",
       "orientied" => "oriented",
       "ouput" => "output",
       "overaall" => "overall",
       "overriden" => "overridden",
       "pacakge" => "package",
       "pachage" => "package",
       "packacge" => "package",
       "packege" => "package",
       "packge" => "package",
       "pakage" => "package",
       "pallette" => "palette",
       "paramameters" => "parameters",
       "paramater" => "parameter",
       "parametes" => "parameters",
       "paramter" => "parameter",
       "paramters" => "parameters",
       "particularily" => "particularly",
       "pased" => "passed",
       "peprocessor" => "preprocessor",
       "perfoming" => "performing",
       "permissons" => "permissions",
       "persistant" => "persistent",
       "plattform" => "platform",
       "pleaes" => "please",
       "ploting" => "plotting",
       "posible" => "possible",
       "powerfull" => "powerful",
       "preceeded" => "preceded",
       "preceeding" => "preceding",
       "precendence" => "precedence",
       "precission" => "precision",
       "prefered" => "preferred",
       "prefferably" => "preferably",
       "prepaired" => "prepared",
       "primative" => "primitive",
       "princliple" => "principle",
       "priorty" => "priority",
       "procceed" => "proceed",
       "proccesors" => "processors",
       "proces" => "process",
       "processessing" => "processing",
       "processpr" => "processor",
       "processsing" => "processing",
       "progams" => "programs",
       "programers" => "programmers",
       "programm" => "program",
       "programms" => "programs",
       "promps" => "prompts",
       "pronnounced" => "pronounced",
       "prononciation" => "pronunciation",
       "pronouce" => "pronounce",
       "pronunce" => "pronounce",
       "propery" => "property",
       "prosess" => "process",
       "protable" => "portable",
       "protcol" => "protocol",
       "protecion" => "protection",
       "protocoll" => "protocol",
       "psychadelic" => "psychedelic",
       "quering" => "querying",
       "reasearch" => "research",
       "reasearcher" => "researcher",
       "reasearchers" => "researchers",
       "recogniced" => "recognised",
       "recognizeable" => "recognizable",
       "recommanded" => "recommended",
       "redircet" => "redirect",
       "redirectrion" => "redirection",
       "refence" => "reference",
       "registerd" => "registered",
       "registraration" => "registration",
       "regulamentations" => "regulations",
       "remoote" => "remote",
       "removeable" => "removable",
       "repectively" => "respectively",
       "replacments" => "replacements",
       "replys" => "replies",
       "requiere" => "require",
       "requred" => "required",
       "resizeable" => "resizable",
       "ressize" => "resize",
       "ressource" => "resource",
       "retransmited" => "retransmitted",
       "runned" => "ran",
       "runnning" => "running",
       "safly" => "safely",
       "savable" => "saveable",
       "searchs" => "searches",
       "secund" => "second",
       "separatly" => "separately",
       "sepcify" => "specify",
       "seperated" => "separated",
       "seperately" => "separately",
       "seperate" => "separate",
       "seperatly" => "separately",
       "seperator" => "separator",
       "sequencial" => "sequential",
       "serveral" => "several",
       "setts" => "sets",
       "similiar" => "similar",
       "simliar" => "similar",
       "speach" => "speech",
       "speciefied" => "specified",
       "specifed" => "specified",
       "specificaton" => "specification",
       "specifing" => "specifying",
       "speficied" => "specified",
       "speling" => "spelling",
       "splitted" => "split",
       "staically" => "statically",
       "standardss" => "standards",
       "standart" => "standard",
       "staticly" => "statically",
       "subdirectoires" => "subdirectories",
       "suble" => "subtle",
       "succesfully" => "successfully",
       "succesful" => "successful",
       "sucessfully" => "successfully",
       "superflous" => "superfluous",
       "superseeded" => "superseded",
       "suplied" => "supplied",
       "suport" => "support",
       "suppored" => "supported",
       "supportin" => "supporting",
       "suppoted" => "supported",
       "suppported" => "supported",
       "suppport" => "support",
       "surpresses" => "suppresses",
       "suspicously" => "suspiciously",
       "synax" => "syntax",
       "synchonized" => "synchronized",
       "syncronize" => "synchronize",
       "syncronizing" => "synchronizing",
       "syncronus" => "synchronous",
       "syste" => "system",
       "sythesis" => "synthesis",
       "taht" => "that",
       "throught" => "through",
       "transfering" => "transferring",
       "trasmission" => "transmission",
       "treshold" => "threshold",
       "trigerring" => "triggering",
       "unecessary" => "unnecessary",
       "unexecpted" => "unexpected",
       "unfortunatelly" => "unfortunately",
       "unknonw" => "unknown",
       "unkown" => "unknown",
       "unuseful" => "useless",
       "usefull" => "useful",
       "usualy" => "usually",
       "utilites" => "utilities",
       "utillities" => "utilities",
       "utilties" => "utilities",
       "utiltity" => "utility",
       "utitlty" => "utility",
       "variantions" => "variations",
       "varient" => "variant",
       "verbse" => "verbose",
       "verisons" => "versions",
       "verison" => "version",
       "verson" => "version",
       "visiters" => "visitors",
       "vitual" => "virtual",
       "whataver" => "whatever",
       "wheter" => "whether",
       "wierd" => "weird",
       "yur" => "your",

        // Variable common_cpan
       "refering" => "referring",
       "writeable" => "writable",
       "nineth" => "ninth",
       "ommited" => "omitted",
       "omited" => "omitted",
       "requrie" => "require",
       "existant" => "existent",
       "explict" => "explicit",
       "agument" => "augument",
       "destionation" => "destination",
     ), array(
       'teh' => 'the'
     )
   );
  }

  public static function getPartialWordRules() {
    return array(
      array(),
      array(
        'recieve'  => 'receive',
        'uft8'     => 'utf8',
        'lenght'   => 'length',
        'heigth'   => 'height',
        'fuction'  => 'function',
      )
    );
  }
}