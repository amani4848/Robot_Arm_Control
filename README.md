# Robot_Arm_Control
A basic web interface to control a 6-motor robot arm. You can move the sliders, save positions (poses), and run them later.

**• Features**

- Control 6 motors with sliders
- Save poses to a database
- View all saved poses in a table
- Run or delete any pose

**• Techniques used**

- HTML, CSS, JavaScript
- PHP
- MySQL

**• Files**

- `index.html` – Main control page
- `save_pose.php` – Saves current pose
- `get_run_pose.php` – Shows all poses
- `update_status.php` – Updates pose status
- `delete_pose.php` – Deletes a pose
- You need to manually create a MySQL database with a poses table

**• How to Run**

1. Create a MySQL database named robot_arm and a table poses with columns: motor1 to motor6, and status.
2. Put all files in htdocs (XAMPP).
3. Start Apache & MySQL from XAMPP.
4. Open: http://localhost/your-folder/index.html

**• Goal**

Make it easy to control, save, and reuse robot arm movements.
