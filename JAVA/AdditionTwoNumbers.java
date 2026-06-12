import java.util.Scanner;
public class AdditionTwoNumbers {
    public static void main (String[] args) {
        Scanner sc = new Scanner(System.in);
        // Tabke input from User : 
        System.out.print("Enter First Number : ");
        int num1 = sc.nextInt();
        System.out.print("\nEnter Second Number : ");
        int num2 = sc.nextInt();
        
        // Process to Add both numbers
        int add = (num1+num2);
        
        
        // Display Output 
        System.out.print("\nDisplay output");
        System.out.print("\nAddition : " + add);
    }
}