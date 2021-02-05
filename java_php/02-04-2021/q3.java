import java.util.Scanner;  

interface vehicle {
    
    void input();
    void display();
}

class bike implements vehicle {
    private String company, model;
    private int value;
    public void input() {        
        Scanner in = new Scanner(System.in);  

        System.out.print("Enter Company: ");
        company = in.nextLine();
        System.out.print("Enter Model: ");
        model = in.nextLine();
        System.out.print("Enter Value: ");
        value = in.nextInt();
    }
    public void display() {
        System.out.println("Company: " + company);
        System.out.println("Model: " + model);
        System.out.println("Value: " + value);
    }
}

class q3 {
    public static void main(String args[]) {

        bike b1 = new bike();
        b1.input();
        System.out.println("\nThe details of the vehicle are: ");
        b1.display();
    }
}