import java.util.Scanner;
import java.lang.Math;
class Meclaurin{
	public static void main(String[] args) {
		int  n, x0=0, hasil=0 ;
		double hasilcos, k, x, pangkat, temp, total =0;
		Scanner scan = new Scanner(System.in);
		System.out.print("Masukkan Nilai X = ");
		x = scan.nextDouble();
		
		System.out.print("Masukkan Suku ke-n = ");
		n = scan.nextInt();
		
		double y = x-x0;
		Meclaurin fac = new Meclaurin();
		for(int i=0; i<=n; i++){
			pangkat = (double)Math.pow(x, i);
			if(i%4==0){
				hasilcos = (double)Math.cos(x0);
			}else if(i%4==1){
				hasilcos = (double)-Math.sin(x0);
			}else if(i%4==2){
				hasilcos = (double)-Math.cos(x0);
			}else{
				hasilcos = (double)Math.sin(x0);
			}
			k = pangkat/fac.factorial(i);
			temp = hasilcos*k;
			total = total+temp;
		}
		System.out.println("\n\nHasilnya \t= "+total);
		System.out.println("cos Hasil \t= "+Math.cos(0.2));
		System.out.println("Ea \t\t= "+(Math.cos(0.2)-total));
	}
	
	public int factorial(int bil){
		if(bil<=1){
			return 1;
		}else{
			return bil*factorial(bil-1);
		}
	}
}