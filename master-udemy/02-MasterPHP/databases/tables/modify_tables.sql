/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  William Chávez
 * Created: 1/09/2020
 */
# Rename a table
ALTER TABLE callbacks RENAME TO demo_callbacks_php;

# Rename column
ALTER TABLE demo_callbacks_php CHANGE first_name name varchar(100);

# Change column type
ALTER TABLE demo_callbacks_php MODIFY last_name char(40) not null;

# Add column to table
ALTER TABLE demo_callbacks_php ADD fixed_phone varchar(12) not null;

# Add column constraint
ALTER TABLE demo_callbacks_php ADD CONSTRAINT uq_email UNIQUE(email);

# Delete a column
ALTER TABLE demo_callbacks_php DROP fixed_phone;

