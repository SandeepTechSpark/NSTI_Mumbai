import java.util.Scanner;
public class Qu_06_UpperTriangularMatrix {
    public static void main (String[] args) {
        Scanner sc = new Scanner(System.in);
        // Matrix intpur Reading from user 
        System.out.print("Enter the Matrix Row Limit (m) : ");
        int m = sc.nextInt();
        System.out.print("\nEnter the Matrix Column Limit (n) : ");
        int n = sc.nextInt();
        
        if(m!=n) {
            System.out.print("Please Enter a square matrix (Row and Column limits must be the same.)");
            sc.close();
            return;
        }
        
        // Array Memory Allocation
        int[][] a = new int[m][n];
        // Array Element Reading
        System.out.print("\n\n\n");
        System.out.println("Enter the Elements of the Matrix : ");
        int k=1;
        for(int i=0; i<m; i++) {
            for(int j=0; j<n; j++){
                System.out.printf("Enter element %d: ",k++);
                a[i][j]=sc.nextInt();
            }
        }
        System.out.println("\n\nThe Upper Triangular Elements are : ");
        for(int i=0;i<m;i++) {
            for(int j=0;j<n;j++) {
                if(j>=i) {
                    System.out.print(a[i][j] + "\t");
                }else{
                    System.out.print("\t");
                }
            }
            System.out.println();
        }
        sc.close();
    }
}