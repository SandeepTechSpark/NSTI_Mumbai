import java.util.Scanner;
public class Hello {
    public static void main (String[] args) {
        Scanner sc = new Scanner(System.in);
        
        // take input as Detainls
        System.out.print("Enter Your Name : ");
        String name = sc.nextLine();
        
        // Display your Result
        System.out.print("Your Entered Name : " + name);
        sc.close();
    }
}