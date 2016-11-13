# ce_Foundation_json
Content editable in Zurb Foundation with JSON

This is just a simple test that I've been working on to see how useful the attribute contenteditable is. By all means use it and adapt it as you see fit. 

-------------------------

To make an element editable simply add a pencil icon above the selected element and add an id (see example below)
 
In the actual element you want to change, add another id that corresponds to the previous but this time include the letter 'p' at the start.
 
 Example:
 -----------------------
 
 <i id="s0" class="fa fa-pencil buttons" aria-hidden="true"></i>
 <p class="lead" id="ps0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
 
 
 
 Finally make sure a corresponding space exists within the json file.
 
[
{
"id":"0",
"content":"Your content here"},
{
"id":"1",
"content":"bar2"},
{
"id":"2",
"content":"foo3"},
{
"id":"3",
"content":"bar4"}
]
