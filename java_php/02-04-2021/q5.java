import java.util.Scanner;

class adder {
    static int add(int x, int y)
    {
        return x + y;
    }
    static float add(float a, float b)
    {
        return a + b;
    }
}

class q5 {


    public static void main(String args[])
    {
        Scanner in = new Scanner(System.in);
        int x, y;
        float a, b;
        System.out.print("Enter two integers: ");
        x = in.nextInt();
        y = in.nextInt();
        System.out.println("Sum: " + adder.add(x, y));

        System.out.print("Enter two floats: ");
        a = in.nextFloat();
        b = in.nextFloat();
        System.out.println("Sum: " + adder.add(a, b));
        
    }
}