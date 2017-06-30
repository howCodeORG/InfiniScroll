<?php

class Video {
        public $videoName = "";
        public $videoViews = "";

        public function __construct($videoName, $videoViews) {
                $this->videoName = $videoName;
                $this->videoViews = $videoViews;
        }
}

$start = $_GET['start'];
$data = array();
$possibleVideos = array(
        new Video("How to Make a Social Network from Scratch: Part 1 - Begining the Design (remake)","238,284"),
        new Video("Send SMS Messages With PHP", "117,328"),
        new Video("How to Make a Social Network from Scratch: Part 42 - Deleting Photos & Albums", "94,256"),
        new Video("How to Make a Social Network from Scratch: Part 2 - Editing the Design (remake)", "66,012"),
        new Video("How to Make a Social Network from Scratch: Part 6 - Creating the Database (remake)", "56,959"),
        new Video("How to Make a Social Network from Scratch: Part 3 - Adding a Search Box (remake)", "54,128"),
        new Video("Make Your Own Programming Language - Part 1 - Lexer", "48,842"),
        new Video("How to Make a Social Network from Scratch: Part 4 - Creating the Menu (remake)", "47,109"),
        new Video("Make your Own Facebook Bot - Part 1 - Setting Up", "45,555"),
        new Video("How to Make a Social Network from Scratch: Part 5 - Designing the Homepage (remake)", "44,817"),
        new Video("How to Make a Social Network from Scratch: Part 7 - Making the Register form work (remake)", "40,151"),
        new Video("Python 101 - Making a Window", "35,017"),
        new Video("Make Your Own Chrome Extension: Part 1", "34,324"),
        new Video("How to Make a Social Network from Scratch: Part 8 - Creating the User Login (remake)", "32,561"),
        new Video("Make Your Own Programming Language - Introduction", "31,878"),
        new Video("Python 101 - Open File Dialog", "28,794"),
        new Video("Python 101 - Creating a Menu", "25,604")
);

for ($i = $start; $i < $start+5; $i++) {
        if ($i < count($possibleVideos)) {
                array_push($data, $possibleVideos[$i]);
        }
}

//echo "<pre>";
echo json_encode($data);
?>
