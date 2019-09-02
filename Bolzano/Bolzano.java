import java.lang.Math;
import java.text.DecimalFormat;
class Bolzano{
	public static void main(String[] args) {
		double x1 =1, x2=2, x3 = 0, fx1, fx2, fx3, asli=0.56714329, er;
		Bolzano b = new Bolzano();
		System.out.println(" X1\t\tX2\t\tX3\t\tFX1\t\tFX2\t\tFX3\t\tError");
		for(int i=1; i<=10; i++){
			
			fx1 = b.fungsi(x1);
			fx2 = b.fungsi(x2);
			x3 = (x1+x2)/2;
			fx3 = b.fungsi(x3);
			
			er = 0-fx3;
			System.out.println(" "+b.p2d(x1)+"\t\t"+b.p2d(x2)+"\t\t"+b.p2d(x3)+"\t\t"+b.p2d(fx1)+"\t\t"+b.p2d(fx2)+"\t\t"+b.p2d(fx3)+"\t\t"+b.p2d(er));
			if(fx1*fx1 < fx2*fx2){
				x2 = x3;
			}else{
				x1 = x3;
			}
		}
	}
	public double fungsi(double x){
		return Math.pow(x, 3)+Math.pow(x, 2)-3*x-3;
	}
	public String p2d(double x){
		DecimalFormat df = new DecimalFormat("0.####");
		return df.format(x);
	}
}