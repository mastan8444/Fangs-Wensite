import java.lang.*;
import java.util.*;
abstract class figure
{
     double dim1;
     double dim2;
     figure(double a,double b)
     {
        dim1=a;
        dim2=b;
     }
     abstract  double area();
    }
    class rectangle extends figure
    {
        double x,y;
        rectangle(double x,double y)
        {
            super(x,y); 
        }
        double area()
        {
            double area;
            area=dim1*dim2;
            System.out.println("area of rectangle : "+area); 
            return area;
        }
        }
         class triangle extends figure 
        {
            double a,b;
            triangle(double a,double b)
            {
                super(a,b);
            }
            double area()
            {
                double kutt;
                kutt=(dim1*dim2)/2;
                System.out.println("area of triangle : "+kutt);
                return kutt;
            }
        }
        class a1
        {
            public static void main(String args[])
            {
              rectangle r=new rectangle(10.00,20.00);
              r.area();
              triangle t=new triangle(11.00,22.00);
              figure f;
              f=t;
              f.area();
            }
        }