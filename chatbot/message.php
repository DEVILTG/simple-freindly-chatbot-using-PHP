<?php
// getting user message through ajax
$getMesg = $_POST['text'];

// process user input and generate reply
if(stripos($getMesg, 'hello') !== false || stripos($getMesg, 'hi') !== false || stripos($getMesg, 'hey') !== false){
    $greetings = array(
        "Hello, how are you doing today?",
        "Good day! How may I assist you?",
        "Hi there! It's great to hear from you!",
        "Hey, what's up? How's your day going so far?",
        "Greetings! I hope you're having a wonderful day!",
        "Howdy! What can I do for you today?",
        "Salutations! How may I be of service?",
    );
    $random_greeting = $greetings[array_rand($greetings)];
    echo $random_greeting;
}
 elseif (stripos($getMesg, 'how are you') !== false) {
    echo "I'm doing well, thank you. How about you?";
} elseif (stripos($getMesg, 'fine') !== false || stripos($getMesg, 'good') !== false) {
    echo "That's great to hear!";
}  elseif (stripos($getMesg, 'what can you do') !== false) {
    echo "I am a simple chatbot which is created to generate predefined replies for some commands";
} elseif(stripos($getMesg, 'todays date')!== false){
    $today = date("Y-m-d");
    echo "todays date is $today";
} elseif(stripos($getMesg, 'tell me a joke') !== false|| stripos($getMesg, 'can u tell me a joke')!== false){
    $jokes = array(
        "Why don't scientists trust atoms? Because they make up everything!",
        "I told my wife she was drawing her eyebrows too high. She looked surprised.",
        "Why was the math book sad? Because it had too many problems.",
        "Why did the tomato turn red? Because it saw the salad dressing!",
        "What do you call a fake noodle? An impasta.",
        "Why did the scarecrow win an award? Because he was outstanding in his field.",
        "Why don't ants get sick? Because they have tiny ant-bodies!",
        "Why was the belt arrested? For holding up pants.",
        "Why did the coffee file a police report? It got mugged.",
        "Why do seagulls fly over the sea? Because if they flew over the bay, they'd be bagels.",
        "Why don't oysters give to charity? Because they're shellfish.",
    );
    
    $random_joke = $jokes[array_rand($jokes)];
    echo $random_joke;
    }
    elseif(stripos($getMesg, 'suggest a movie') !== false|| stripos($getMesg, 'suggest a movie')!== false){
        $genres = array("action", "comedy", "drama", "romance", "thriller");
        $random_genre = $genres[array_rand($genres)];
    
        switch($random_genre){
            case "action":
                $movies = array("Die Hard", "The Matrix", "John Wick", "The Terminator", "The Dark Knight");
                break;
            case "comedy":
                $movies = array("Bridesmaids", "The Hangover", "Superbad", "Anchorman", "Step Brothers");
                break;
            case "drama":
                $movies = array("The Shawshank Redemption", "Forrest Gump", "The Godfather", "Schindler's List", "The Green Mile");
                break;
            case "romance":
                $movies = array("The Notebook", "Titanic", "Love Actually", "The Fault in Our Stars", "A Walk to Remember");
                break;
            case "thriller":
                $movies = array("The Silence of the Lambs", "Seven", "Gone Girl", "Memento", "Psycho");
                break;
            default:
                $movies = array("The Godfather", "Die Hard", "The Notebook", "The Silence of the Lambs", "Bridesmaids");
        }
    
        $random_movie = $movies[array_rand($movies)];
        echo "Based on your request, I suggest watching a $random_genre movie. How about $random_movie?";
    }
    elseif(stripos($getMesg, 'goodbye') !== false || stripos($getMesg, 'bye') !== false || stripos($getMesg, 'see you later') !== false){
        $goodbyes = array(
            "It was a pleasure assisting you. Have a great day!",
            "Thank you for using our service. Goodbye!",
            "Farewell! We hope to hear from you again soon.",
            "Until next time, take care!",
            "Goodbye! It was an honor to be of service to you.",
            "Have a wonderful day and we look forward to helping you again soon!",
        );
        $random_goodbye = $goodbyes[array_rand($goodbyes)];
        echo $random_goodbye;
    }
    
    
else {
    echo "Sorry, I don't understand.";
}
?>