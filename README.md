# UKbankaccountValidator
--Single web page to validate UK bank account through a third party service--

PhP Developer Test

Requirements:

The deliverable for this test is to provide a piece of software that will deliver the following functionality.

Single web page to validate UK bank account through a third party service

This single web page will have simply 2 input fields:
Sortcode
Bank Account

This single web page will have a single button to perform the trigger the validation.

The third party service will provide you with a Yes/No and you will need to display the result using a method of your choice from a modal windows or an inline html message. You should not use a javascript alert.

The styling of the web page is up to you, however I would expect something looking polished.

Every data capture and results should be stored in a mysql table.
The mysql table should also record the IP address of the user.

You need to design the mysql table(s) to meet the requirement.

The third party service is https://www.bankaccountchecker.com
They provide a free API to integrate easily in web sites.

Technologies:

Technology that you must use
LAMP (also as php is cross platform, you can code on a Win machine)
Mysqli extension

Technology allowed:
jQuery
Any jQuery plugins
Any Css/Html Framework

Technology not allowed
MVC framework (zen, codeigniter, ….)
Mysql extension, pdo and adodb


Deliverables:
You should provide a url to a Assembla SVN account. If you do not have an Assembla account, you will need to create a free account at https://www.assembla.com/home
The software should be committed to your free SVN repository, and we should be able to deploy it directly under an Apache installation.
You should provide simple installation instruction to guide the implementation through the setup of the software and DB components.

Timescales:
It should take no longer than 2/3 hours to develop a working prototype.
During this allocated time, you should deliver enough to demonstrate that you have understood the requirement but also show that you understand web based applications components.

The look of the web page is not important.

Technical Constraints:

You should not use the html <form> tag.



# INSTRUCTION
--Installation--
Restore the db from terminal, example

$ mysql -u root -p ukbank < BankAccount_ukbank.sql

Restart MySQL and Apache

/etc/init.d/mysql

the project should be under /var/www

apache2ctl restart

Check it online

go to http://localhost/UKbankaccountValidator

And you can insert a new number that you'll see in the db

NOTE: For simplicity I didn't parse errors back, neither I put https nor Database with more than one table (not in the requirements)
