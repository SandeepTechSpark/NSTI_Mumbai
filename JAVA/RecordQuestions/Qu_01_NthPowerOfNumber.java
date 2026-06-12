import java.util.Scanner;
public class Qu_01_NthPowerOfNumber {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        // Read Input from user 
        System.out.print("Enter Base : ");
        int base = sc.nextInt();
        System.out.print("Enter Exponent : ");
        int exponent = sc.nextInt();
        // Process to Calculate Result
        int result = 1;
        for(int i = 0; i <= exponent; i++) {
            result *= base;
        }
        System.out.println("\n\n\nBase : " + base + "\nExponent : " + exponent + "\nResult : " + result);
    }
}