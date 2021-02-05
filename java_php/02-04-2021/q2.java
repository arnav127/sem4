import java.util.Scanner;  

class vehicle {
    private String type, company, model;
    private int value;

    public vehicle(String t, String c, String m, int v) {
        type = t;
        company = c;
        model = m;
        value = v;
    }
    public void display() {
        System.out.println("Type: " + type);
        System.out.println("Company: " + company);
        System.out.println("Model: " + model);
        System.out.println("Value: " + value);
    }
}

class q2 {
    public static void main(String args[]) {

        Scanner in = new Scanner(System.in);  

        System.out.print("Enter Type: ");
        String t = in.nextLine();
        System.out.print("Enter Company: ");
        String c = in.nextLine();
        System.out.print("Enter Model: ");
        String m = in.nextLine();
        System.out.print("Enter Value: ");
        int v = in.nextInt();

        vehicle veh = new vehicle(t, c, m, v);
        System.out.println("\nThe details of the vehicle are: ");
        veh.display();
    }
}