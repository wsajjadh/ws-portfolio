import React from 'react';
import { Head } from '@inertiajs/react';

interface PortfolioImage {
    id: number;
    image_path: string;
}

interface Tag {
    id: number;
    name: string;
}

interface Category {
    id: number;
    name: string;
}

interface Portfolio {
    id: number;
    title: string;
    description: string;
    objective: string;
    category: Category;
    tags: Tag[];
    images: PortfolioImage[];
}

interface Props {
    portfolios: Portfolio[];
}

export default function Portfolios({ portfolios }: Props) {
    return (
        <>
            <Head title="Portfolios" />
            
            <div className="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
                <div className="max-w-7xl mx-auto">
                    <h1 className="text-4xl font-bold text-gray-900 mb-12">Portfolio Projects</h1>
                    
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {portfolios.map((portfolio) => (
                            <div 
                                key={portfolio.id} 
                                className="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow"
                            >
                                {portfolio.images.length > 0 && (
                                    <div className="aspect-video bg-gray-200 overflow-hidden">
                                        <img 
                                            src={`/storage/${portfolio.images[0].image_path}`}
                                            alt={portfolio.title}
                                            className="w-full h-full object-cover"
                                            onError={(e) => {
                                                const target = e.target as HTMLImageElement;
                                                target.src = 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="400" height="300"%3E%3Crect fill="%23e5e7eb" width="400" height="300"/%3E%3Ctext x="50%" y="50%" font-size="18" fill="%236b7280" text-anchor="middle" dominant-baseline="middle"%3ENo Image%3C/text%3E%3C/svg%3E';
                                            }}
                                        />
                                    </div>
                                )}
                                
                                <div className="p-6">
                                    <h2 className="text-xl font-semibold text-gray-900 mb-2">
                                        {portfolio.title}
                                    </h2>
                                    
                                    <p className="text-sm text-gray-500 mb-3">
                                        Category: <span className="font-medium">{portfolio.category.name}</span>
                                    </p>
                                    
                                    <p className="text-gray-600 text-sm mb-4 line-clamp-3">
                                        {portfolio.description}
                                    </p>
                                    
                                    {portfolio.objective && (
                                        <p className="text-gray-600 text-sm mb-4">
                                            <span className="font-semibold">Objective:</span> {portfolio.objective.substring(0, 100)}...
                                        </p>
                                    )}
                                    
                                    {portfolio.tags.length > 0 && (
                                        <div className="flex flex-wrap gap-2">
                                            {portfolio.tags.map((tag) => (
                                                <span 
                                                    key={tag.id}
                                                    className="inline-block px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded"
                                                >
                                                    {tag.name}
                                                </span>
                                            ))}
                                        </div>
                                    )}
                                </div>
                            </div>
                        ))}
                    </div>
                    
                    {portfolios.length === 0 && (
                        <div className="text-center py-12">
                            <p className="text-gray-500 text-lg">No portfolios to display</p>
                        </div>
                    )}
                </div>
            </div>
        </>
    );
}
