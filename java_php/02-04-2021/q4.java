import java.util.Scanner;

class person {
    public String name;
    protected String email;
    public int age;
    protected int height, weight;
    protected long phone;
}

class sportsman extends person {
    public String sport, team;
    public int experience;

    public void input() {
        Scanner in = new Scanner(System.in);
        System.out.print("Enter Name: ");
        name = in.nextLine();
        System.out.print("Enter Age: ");
        age = in.nextInt();
        System.out.print("Enter Phone No: ");
        phone = in.nextLong();
        in.nextLine();
        System.out.print("Enter Email: ");
        email = in.nextLine();

        System.out.print("Enter Sport Played: ");
        sport = in.nextLine();
        System.out.print("Enter Team Name: ");
        team = in.nextLine();
        System.out.print("Enter Experience(Years): ");
        experience = in.nextInt();
    }

    public void display() {
        System.out.println("Name: " + name);
        System.out.println("Age: " + age);
        System.out.println("Phone No: " + phone);
        System.out.println("Email: " + email);
        System.out.println("Sport Played: " + sport);
        System.out.println("Team Name: "  + team);
        System.out.println("Experience(Years): " + experience);
    }
}

class q4 {
    public static void main(String args[]) {
        sportsman sp = new sportsman();
        
        sp.input();
        System.out.println("\nThe details of the sportsman are:");
        sp.display();
    }
}