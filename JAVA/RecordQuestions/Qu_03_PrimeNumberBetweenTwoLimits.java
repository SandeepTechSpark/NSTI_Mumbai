import java.util.Scanner;
public class Qu_03_PrimeNumberBetweenTwoLimits {
    public static void main (String[] args) {
        Scanner sc = new Scanner(System.in);
        int limit1, limit2;
        // Take Limit Input from User
        System.out.print("Enter First Limit : ");
        limit1 = sc.nextInt();
        System.out.print("\nEnter Second Limit : ");
        limit2 = sc.nextInt();
        
        // Process to find all Primes between both limits
         System.out.print("\nPrime Number between " + limit1 + " and " + limit2 + " are : ");
        for (int num = limit1; num<= limit2;num++){
            boolean isPrime = true;
           // if(num<=1) continue;
            for(int i=2; i<=num/2;i++){
                if(num%i==0){
                    isPrime = false;
                    break;
                }
            }
            if(num > 1 && isPrime == true) System.out.print(num + " ");
        }
     }
}