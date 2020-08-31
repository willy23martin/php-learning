<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arrays</title>
    </head>
    <body>
        <h3>Arrays</h3>
        <?php
        $movie = "The Lord of The Rings";
        $movies = array($movie, $movie . ' II', $movie . ' III');
        var_dump($movies);

        $singers = ["Milley Cyrus", "LP", "Eros Rammazzoti", "Annalisa"];
        var_dump($singers);

        echo 'First Movie: ' . $movies[0] . '<br/>';
        echo 'First Singer: ' . $singers[0] . '<br/>';
        ?>
        <hr>

        <h3>Arrays - For loop </h3>
        <ol>
            <?php
            for ($i = 0; $i < count($movies); $i++) {
                echo "<li>Movie $i: $movies[$i]</li>";
            }
            ?>
        </ol>
        <hr>

        <h3>Arrays - For each</h3>
        <ol>
            <?php
            foreach ($movies as $movie) {
                echo "<li>Movie : $movie</li>";
            }
            ?>
        </ol>
        <hr>

        <h3>Arrays - Arrow Syntax key => value for properties</h3>
        s        <?php
        $personProperties = array(
            'name' => 'William Chávez',
            'age' => 26,
            'professionA' => 'Systems Engineer',
            'professionB' => 'Telematics Engineer'
        );
        var_dump($personProperties);
        echo 'Person: ' . $personProperties;
        ?>
        <hr>

        <h3>Nested Arrays</h3>
        <?php
        $contacts = array(
            array(
                'name' => 'ContactA',
                'phoneNumber' => '319999999',
                'email' => 'contactA@email.domain'
            ),
            array(
                'name' => 'ContactB',
                'phoneNumber' => '320999999',
                'email' => 'contactB@email.domain'
            ),
            array(
                'name' => 'ContactC',
                'phoneNumber' => '3219999999',
                'email' => 'contactC@email.domain'
            )
        );
        var_dump($contacts);
        foreach ($contacts as $key => $contact) {
            echo 'Contacts emails: ' . $contact['email'] . '<br/>';
        }
        ?>
        <hr>

        <h3>Arrays - Methods </h3>
        <?php
        echo '<h4>Sort desc arrays</h4>';
        asort($singers);
        var_dump($singers);

        echo '<h4>Sort asc arrays</h4>';
        sort($singers);
        var_dump($singers);

        echo '<h4>Add elements to array</h4>';
        $newSinger = "Arisa";
        $singers[] = $newSinger;
        asort($singers);
        var_dump($singers);

        echo '<h4>Add elements to array by using array_push</h4>';
        $newSingerB = "Mariah Carey";
        array_push($singers, $newSingerB);
        asort($singers);
        var_dump($singers);

        echo '<h4>Remove last element of an array by using array_pop</h4>';
        array_pop($singers);
        asort($singers);
        var_dump($singers);

        echo '<h4>Remove random element of an array by using array_rand</h4>';
        echo $singers[array_rand($singers)];
        asort($singers);
        var_dump($singers);

        echo '<h4>Revert last element of an array by using array_reverse</h4>';
        var_dump(array_reverse($singers));

        echo '<h4>Search last element of an array by using array_search</h4>';
        echo array_search('LP', $singers);
        var_dump($singers);

        echo '<h4>Lenght of an array with count or sizeof</h4>';
        echo 'Singers count: ' . count($singers) . '<br/>';
        echo 'Size of movies: ' . sizeof($movies) . '<br/>';
        ?>
        <hr>

    </body>
</html>
