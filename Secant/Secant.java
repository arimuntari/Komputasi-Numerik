import java.lang.Math;
import java.text.DecimalFormat;
class Secant{
	public static void main(String[] args) {
		double x0 =0, x1 =1, fx0, fx1, x3,  asli=0.56714329, ea, er, ee, sm;
		Secant b = new Secant();
		DecimalFormat s = new DecimalFormat("0.00");
		for(int i=1; i<=3; i++){
			fx0 = b.fungsi(x0);
			fx1 = b.fungsi(x1);
			x3 = x1 -(( fx1 * (x0-x1) )/(fx0-fx1));
			er = (x3-asli)/asli* 100;
			System.out.println("fX"+(-1+i)+" = "+fx0 );
			System.out.println("fX"+(0+i)+" = "+fx1 );
			System.out.println("X"+i+" = "+x3 );
			System.out.println("Er = "+s.format(Math.abs(er)) );
			x0 = x1;
			x1 = x3;
			System.out.println("\n\n");
		}
	}
	public double fungsi(double x){
		return Math.exp(-x)-x;
	}
	public String p2d(double x){
		DecimalFormat df = new DecimalFormat("0.####");
		return df.format(x);
	}
}