import javax.swing.*;
class front
{
  public static void main(String[] s)
{
  JFrame f=new JFrame("front end");
  JLabel l1=new JLabel("username:");
  l1.setBounds(20,50,100,45);
  JTextField t1= new JTextField();
  t1.setBounds(100,150,100,40);
  JLabel l2=new JLabel("password");
  l2.setBounds(50,50,100,45);
  JTextField t2=new JTextField();
  t2.setBounds(50,150,100,40);
  JButton b=new JButton("click me");
  b.setBounds(200,200,80,40);
  f.add(l1);
  f.add(t1);
  f.add(l2);
  f.add(t2); 
  f.add(b);
   f.setSize(400,500);
        f.setLayout(null);
        f.setVisible(true);
}
}