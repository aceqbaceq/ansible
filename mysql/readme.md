---

The playbook installs mysql server.


How to(the recommended way):
 - $ cd  $(path to the playbook folder)

 - $ vagrant up

 - $ ansible-playbook -i ./inventory/ db-play.yml



P.S.:
 The settings:
   the variable: mysql_root_pass
   in the playbook: db-play.yml 
   sets the password for mysql root user. 
   Feel free to change it for whatever you want.
