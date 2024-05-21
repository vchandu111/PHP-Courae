CREATE TABLE TASKS (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title  VARCHAR(255) NOT NULL,
    description TEXT,
    completed BOOLEAN DEFAULT FALSE
);


INSERT INTO TASKS (title,description) VALUES ('Complete php course','complete entire PHP course by EOW'),('','')

UPDATE TASKS SET completed = TRUE WHERE id=1;