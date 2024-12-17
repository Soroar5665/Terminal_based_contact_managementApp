<?php

$contacts = [];

//add Contact
function addContact(array &$contacts, string $name, string $email, string $phone): void {
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}

//Display Contact
function displayContacts(array $contacts): void{
    if(empty($contacts)){
        echo "No contract available.\n";
    }else{
        foreach($contacts as $contact){
            echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']}\n";
        }
    }
}
 
while(true){
    echo "Contact Management Menu\n";
    echo "1. Add Contact\n2. View Contacts\n3. Exit\n";
    $choice = (int)readline("Choice an option:");
    if($choice === 1){
        $name = readline("Enter name: ");
        $email = readline("Enter email: ");
        $phone = readline("Enter phone: ");
        addContact($contacts, $name, $email, $phone);
        echo "Contact add successfully.\n";
    }elseif($choice ===2){
        displayContacts($contacts);
    }elseif($choice===3){
        echo "Exiting...\n";
        break;
    }else{
        echo "Invalid Choice. Please try again. \n";
    }

}

?>