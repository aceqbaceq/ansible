

Intro:
  -  The project is designed to put  files/flights/flights.log to elasticsearch and   visualize its fields in kibana.
  -  The project uses vagrant to create VM and ansible to provision software stack.

The software stask:
  - Vagrant
  - Elasticsearch
  - Logstash
  - Kibana
  - Filebeat


Sucessfully tested on:
  - Host OS: Ubuntu 16.04.2 LTS
  - Host CPU cores: 5
  - Host RAM: 7 GB
  - Elasticsearch: 7.12.0
  - Logstash:  1:7.12.0-1
  - Kibana: 7.12.0
  - Filebeat: 7.12.0
  - Vagrant: 1:7.12.0-1



How to make it work:

1. download the project from github

2. install vagrant on your host

3. cd to the project directory

3. power on the VM
   $ vagrant up elk
   VM consumes 4 cpu and 5GB RAM

4. launch ansible playbook
   $ ansible-playbook play.yml

5. wait for about  8 minutes

  successfull installation log looks like this:

    $ ansible-playbook play.yml

    PLAY [play - install elk and parse flights.log] *********************************************************************************************************************************************

    TASK [Gathering Facts] **********************************************************************************************************************************************************************
    ok: [elk]

    TASK [install support packages] *************************************************************************************************************************************************************
    changed: [elk]
    ...
    ...

    RUNNING HANDLER [restart filebeat] **********************************************************************************************************************************************************
    changed: [elk]

    PLAY RECAP **********************************************************************************************************************************************************************************
    elk                        : ok=23   changed=22   unreachable=0    failed=0    skipped=0    rescued=0    ignored=0


6.the installation is complete. whats next?

     -  check if elastic is working
     
        #  curl localhost:9201

     - check if index with the name "logstash*" exists on elastic
       #  curl -s -X GET "localhost:9201/_cat/indices/*?v=true&s=index&pretty" | grep logstash


     -  open kibana in the browser
        http://localhost:5601/

     -  click "Explore on my own"

     -  click "Stack Management" - "kibana" - "index patterns" - "create index pattern"

     -  in the filed "Index pattern name" type  logstash-*

     -  click "next step"

     - in "Time field" select timestamp

     - click "create index pattern"

     - go to "dashboard" - "create new dashboard" - "create new panel" - "lens"

     - select 9th March 2021 in  time and date filed

     - select "comfort_class.keyword" and drag and drop to "Stacked bar" area

     - congratulations ! You' ve gottent the visualization


In case you are wondering:
   What actually happens under the bonet:
   
      - ansible:
           - installs elasticsearch, kibana, logstash, filebeat
           - copy config files
           - copy flights.log
           - starts the services
      - after that:
           - filebeat:
                -  reads flights.log line by line and sends it  to logstash 
           - logstash:
                -  reads messages
                -  parses them  using grok filter /etc/logstash/conf.d/first-pipeline.conf 
                -  subdivide into additional fields 
                -  send them to elasticsearch in index with the name "logstash-*"
           - kibana:
               -  reads the index "logstash-*" from elasticsearch









