/*===========================*/ 
/* Nom de SGBD :  MySQL 5.0              
/* Date de création :  2011-09-13 16:34:07         
/*===========================*/ 
drop table if exists acos; 
drop table if exists aros; 
drop table if exists arosAcos; 
drop table if exists decisions; 
drop table if exists decisionsNodes; 
drop table if exists dmodels; 
drop table if exists nodeTypes; 
drop table if exists nodes; 
drop table if exists relationshipTypes; 
drop table if exists relationships; 
drop table if exists roles; 
drop table if exists users; 
/*===========================*/ 
/* Table : acos                  
/*===========================*/ 
create table acos 
( 
 aco_id      int(11) not null auto_increment, 
 aco_aco_id     int(11), 
 aco_model     varchar(255) not null default NULL, 
 aco_model_alias varchar(255) default NULL, 
 aco_left   int not null default NULL, 
 aco_right int not null default NULL, 
 primary key (aco_id) 
); 
/*===========================*/ 
/* Table : aros                  
/*===========================*/ 
create table aros 
( 
 aro_id       int(11) not null auto_increment, 
 aro_aro_id    int(11), 
 rol_role_id    int(11) not null, 
 aro_model    varchar(255) not null default NULL, 
 aro_model_alias  varchar(255) default NULL, 
 aro_left     int not null default NULL, 
 aro_right     int not null default NULL, 
 primary key (aro_id) 
); 
/*===========================*/ 
/* Table : arosAcos                
/*===========================*/ 
create table arosAcos 
( 
 aco_aco_id     int(11) not null, 
 aro_aro_id    int(11) not null, 
 arosAcos_create  varchar(2) not null, 
 arosAcos_read   varchar(2) not null, 
 arosAcos_update varchar(2) not null, 
 arosAcos_delete  varchar(2) not null, 
 arosAcos_modified  datetime,
  primary key (aco_aco_id, aro_aro_id) 
); 
/*===========================*/ 
/* Table : decisions                
/*===========================*/ 
create table decisions 
( 
 decision_id      int(11) not null auto_increment, 
 use_user_id     int(11) not null, 
 dmo_dmodel_id   int not null, 
 decision_description varchar(45) default NULL, 
 decision_created   datetime default NULL, 
 decision_modified  datetime default NULL, 
 primary key (decision_id) 
); 
/*===========================*/ 
/* Table : decisionsNodes              
/*===========================*/ 
create table decisionsNodes 
( 
 dec_decision_id       int(11) not null, 
 nod_node_id         int(11) not null, 
 decisionsNodes_isSelected bool not null, 
 decisionsNodes_isProcessed bool not null, 
 decisionsNodes_created   datetime, 
 decisionsNodes_modified  datetime, 
 primary key (dec_decision_id, nod_node_id) 
); 
/*===========================*/ 
/* Table : dmodels                 
/*===========================*/ 
create table dmodels 
( 
 dmodel_id      int not null auto_increment, 
 use_user_id      int(11) not null, 
 dmodel_description varchar(45), 
 dmodel_isValidated bool not null default NULL, 
 dmodel_isPrivate  bool not null default NULL, 
 dmodel_isEditable  bool not null default 1, 
 dmodel_created   datetime, 
 dmodel_modified  datetime, 
 primary key (dmodel_id) 
); 
/*===========================*/ 
/* Table : nodeTypes                
/*===========================*/ 
create table nodeTypes 
( 
 nodeType_id       int(11) not null auto_increment, 
 nod_nodeType_id3    int(11), 
 nod_nodeType_id    int(11), 
 nod_nodeType_id2    int(11), 
 nodeType_description  varchar(45) not null, 
 nodeType_isExpandable bool not null, 
 nodeType_isLocked   bool not null default NULL, 
 nodeType_isExpandAutolink bool not null default NULL, 
  nodeType_created  datetime, 
 nodeType_modified  datetime, 
 primary key (nodeType_id) 
); 
/*===========================*/ 
/* Table : nodes                 
/*===========================*/ 
create table nodes 
( 
 node_id        int(11) not null auto_increment, 
 nod_node_id     int(11), 
 dmo_dmodel_id    int not null, 
 nod_nodeType_id  int(11) not null, 
 node_description   varchar(45), 
 node_xPosition   int default NULL, 
 node_yPosition   int default NULL, 
 node_level     int not null default NULL, 
 node_left       int not null default NULL, 
 node_right     int not null default NULL, 
 node_created     datetime default NULL, 
 node_modified    datetime default NULL, 
 primary key (node_id) 
); 
/*===========================*/ 
/* Table : relationshipTypes             
/*===========================*/ 
create table relationshipTypes 
( 
 relationshipType_id        int(11) not null auto_increment, 
 relationshipType_description varchar(45), 
 relationshipType_created  datetime, 
 relationshipType_modified datetime, 
 primary key (relationshipType_id) 
); 
/*===========================*/ 
/* Table : relationships               
/*===========================*/ 
create table relationships 
( 
 relationship_predecessor   int(11) not null, 
 relationship_successorNode  int(11) not null, 
 rel_relationshipType_id   int(11) not null, 
 relationships_created        datetime, 
 relationships_modified       datetime, 
 primary key (relationship_predecessor, relationship_successorNode, 
rel_relationshipType_id) 
); 
/*===========================*/ 
/* Table : roles                 
/*===========================*/ 
create table roles 
( 
 role_id  int(11) not null auto_increment, 
 role_name         varchar(45) not null, 
 role_created        datetime, 
 role_modified       datetime,
  primary key (role_id) 
); 
/*===========================*/ 
/* Table : users                 
/*===========================*/ 
create table users 
( 
 user_id      int(11) not null auto_increment, 
 rol_role_id     int(11) not null, 
 user_username  varchar(45) not null, 
 user_password   varchar(45) not null, 
 user_isBanned   boolean, 
 user_picture    varchar(255) default NULL, 
 user_created    datetime not null, 
 user_modified   datetime not null, 
 primary key (user_id) 
); 
