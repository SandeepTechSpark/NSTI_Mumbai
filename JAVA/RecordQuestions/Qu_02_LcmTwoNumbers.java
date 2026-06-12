import java.util.Scanner;
public class Qu_02_LcmTwoNumbers {
    public static void main (String[] args) {
        Scanner sc = new Scanner(System.in);
        
        // Read Input from user System Keyboard 
        System.out.print("Enter First Number : ");
        int fnum  = sc.nextInt();
        System.out.print("\nEnter Second Number : ");
        int snum = sc.nextInt();
        // Process to Calulate 
        int max = (fnum>snum) ? fnum : snum;
        while(true) {
            if(max%fnum==0 && max%snum==0) {
                System.out.println("\nLCM of " + fnum + " and " + snum + " : " + max);
                break;
            } 
            max++;
        }
    }
}