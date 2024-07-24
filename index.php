<!DOCTYPE html>
<html>
<head>
    <title>Simple To-Do List</title>
</head>
<body>
    
<?php
// Array to store To-Do list items
$todo_list = array("Eng Masoud", "Said", "Abdirahman", "Ibrahim", "Abdullahi");

// Function to add a new item to the to-do list
function add_item(&$todo_list, $item) {
    $todo_list[] = $item;
}

// Function to remove an item from the to-do list
function remove_item(&$todo_list, $item) {
    $index_remove_item = array_search($item, $todo_list);
    if ($index_remove_item !== false) {
        unset($todo_list[$index_remove_item]);
    }
}

// Function Add a new item
add_item($todo_list, "Canbaro");

// Function Remove an item
remove_item($todo_list, "Abdirahman");
?>
    <h1>To-Do List</h1>
    <ul>
        <?php
        foreach ($todo_list as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
</body>
</html>
