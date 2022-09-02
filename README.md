# evaluation_task
Task : - Create a customer attribute called "Last ordered date", when ever customer placed an order that custom attribute date should be updated. This attribute should be displayed on the admin panel

Steps For creating 
First of all we will have to register our module.
In that module we need to create setup folder and under the setup folder we have to create inscehma.php for creating customer date attribute (where the attribute name is ‘last order date’ , and type should be ‘date’)
After that we need to create a block .php file inside the block and in this block we will have to write the logic of getting customer 
Under the view/adminhtml/layout folder we have to create customer_edit_index.xml .
After that under the templet/tab we have to create a customer_view.phtml file in this file we  can get last order details by customer id and using getCreateAt() we got the last ordered date and also we got customer name  and the last ordered date we can assign our custom attribute.
Now need to go to run upgrade , deploy, and create cache command
After that go to admin and open customer view page inside this page below our custom tab is ready after clicking on this tab you can see customer name and last order date is there 

Thank You 

