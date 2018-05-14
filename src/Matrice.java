
public class Matrice 
{
	protected Double [][] monTableau;
	
	public Matrice(Double[][] tableau)
	{
		this.monTableau = tableau;
	}
	
	
	public Matrice(int x,int y, int min, int max)
	{
		this.monTableau = new Double[x][y];
		
		for(int i = 0; i < x; i++)
		{
			for(int j = 0; j < y; j++)
			{
				monTableau[i][j] = random(min,max);
			}
		}
	}
	
	public Integer getX()
	{
		return monTableau.length;
	}
	
	public Integer getY()
	{
		return monTableau[0].length;
	}
	
	public static Matrice multiplier(Matrice A, Matrice B)
	{
		return null;
	}
	
	public static Matrice multiplier(Matrice A, Double B)
	{
		return null;
	}
	
	public static Matrice addtionner(Matrice A, Matrice B)
	{
		return null;
	}
	
	public static Matrice addtionner(Matrice A, Double B)
	{
		return null;
	}
	
	public static Matrice transposer(Matrice A, Matrice B)
	{
		return null;
	}
	
	static public Double random(int min, int max)
	{
		return (Math.random()*( max - min + 1 ))+ min; 
	}
	
	public String toString()
	{
		String texte = new String();
		for(int i = 0; i < this.getX(); i++)
		{
			texte += "[";
			for(int j = 0; j < this.getY(); j++)
			{
				texte +=" "+ this.monTableau[i][j]+" ";
			}
			texte += "]\n";
		}
		return texte;
	}
}
