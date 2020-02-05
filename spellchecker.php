<?php
# Single Suggetion
$config_dic= pspell_config_create ('en');
$word = "Rite"; //Your word

# Load dictionary 
$spellLink = pspell_new("en");

# Check your word against the dictionary
if (!pspell_check($spellLink, $word)) {
    
    # Check for suggestion 
    $suggestions = pspell_suggest($spellLink, $word);
    foreach ($suggestions as $suggestion) {
        echo 'The suggestion is '.$suggestion;
    }
    
}
else{
    # Given word is correct
}
